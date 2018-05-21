<?php
session_start();

		if(isset($_SESSION["kadi"]))
		{
			$ograd=$_SESSION["kadi"];
			echo "Oturum açık durumda";
		}
		else {
			$ograd="Login";
		}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Teknoloji Labaratuvar</title>
	<style type="text/css">
		body{
			background: #eee;
		}
		table{
			border: 1px solid black;
		}
		.footer{
			background: #111;
			color: #aaa;
			padding: 10px;
			text-align: center;
		}
		div.sticky {
			position: -webkit-sticky;
			position: sticky;
			top: 0;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<a href="odev.php">
				<img src="http://tf.selcuk.edu.tr/images/tf_logo_tr.png" href="odev.php">
			</a>
		</div>
		<div class="col-md-9">
			<h1>Teknoloji Fakültesi<br>Labaratuvar Kullanım Planlama</h1>
				<p>Labaratuvarların kullanım planları, labaratuvarlar hakkında bilgiler, öğretim görevlilerine özel labaratuvar planlama ayarları ve daha fazlası...</p>
			</div>
	</div>

</div>

<div class="sticky">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="odev.php">Tekno-Lab</a>
    </div>
    	<ul class="nav navbar-nav">
      		<li class="active"><a href="odev.php">Ana Sayfa</a></li>
    	</ul>
    	<ul class="nav navbar-nav navbar-right">
      		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $ograd ?> <span class="glyphicon glyphicon-log-in"></span></a>
        		<ul class="dropdown-menu">
		          	<li><a href="login.php">Giriş Yap</a></li>
		          	<li><a href="hesapAyarlari.php">Hesap Ayarları</a></li>
		          	<li><a href="ikinci.php">Labaratuvar Kullanım Ekle</a></li>
		          	<li><a href="logout.php">Çıkış Yap</a></li>
        		</ul>
      		</li>
    	</ul>
  	</div>
	</nav>
</div>


	<div class="container">
	  <h2 style="border-bottom: 1px solid black">Giriş Yap</h2>
	  <form class="form-horizontal" action="loginKontrol.php" method="POST">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Kullanıcı Adı:</label>
	      <div class="col-sm-8">
	        <input type="text" class="form-control" id="email" placeholder="Kullanıcı adı girin" name="username">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Şifre:</label>
	      <div class="col-sm-8">
	        <input type="password" class="form-control" id="pwd" placeholder="Şifrenizi girin" name="password">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-offset-2 col-sm-8">
	        <div class="checkbox">
	          <label><input type="checkbox" name="remember"> Beni Hatırla</label>
	        </div>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-offset-2 col-sm-8">
	        <button type="submit" class="btn btn-default">Giriş</button>
	      </div>
	    </div>
	  </form>
	</div>

	<div class="footer" style="margin-top: 100px">
		<p>© Copyright 2018 Abdülbaki & Melih</p>
	</div>

	<?php
		#PHP kodlarının yer alacağı bölüm..
	?>
</body>
</html>
