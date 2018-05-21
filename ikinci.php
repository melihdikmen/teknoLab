<?php
include("izin.php");
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
      		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $ograd ?><span class="glyphicon glyphicon-log-in"></span></a>
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
		<div class="panel-group">
			<div class="panel panel-info">
				<div class="panel-heading">
					Labaratuvar Kullanım Kaydı:
				</div>
				<div class="panel-body">
					<form action="kayıt.php" method="post">

					    <div class="form-group">
					      <label for="sel1">Labaratuvar Adı:</label>
					      <select class="form-control" id="sel1" name="labad">
						        <?php
										include ("baglan.php");
										$sorgu=mysqli_query($baglan,"select * from lab");
										while($okunan=mysqli_fetch_array($sorgu))
										{
											echo "<option>".$okunan['lab_adi']."</option> ";
										}
										?>
					      </select>
					    </div>



					    <div class="form-group">
					      <label for="sel1">Ders Adı:</label>
					      <select class="form-control" id="sel1" name="dersad">
									<?php

									$sorgu=mysqli_query($baglan,"select * from dersler");
									while($okunan=mysqli_fetch_array($sorgu))
									{
										echo "<option>".$okunan['DersAd']."</option> ";
									}
									?>
					      </select>
					    </div>



					    <div class="form-group">
					      <label for="sel1">Öğretim Görevlisi</label>
					      <select class="form-control" id="sel1" name="ogrenim">
									<?php

									$sorgu=mysqli_query($baglan,"select * from ogr");
									while($okunan=mysqli_fetch_array($sorgu))
									{
										echo "<option>".$okunan['ad']."</option> ";
									}
									?>

					      </select>
					    </div>



					    <div class="form-group">
					      <label for="sel1">Gün:</label>
					      <select class="form-control" id="sel1" name="gun">
						        <option>Pazartesi</option>
						        <option>Salı</option>
						        <option>Çarşamba</option>
						        <option>Perşembe</option>
										 <option>Cuma</option>

					      </select>
					    </div>



					    <div class="form-group">
					      <label for="sel1">Saat:</label>
					      <select class="form-control" id="sel1" name="saat">
										<option>08:30-09:10</option>
										<option>09:10-09:50</option>
										<option>10:00-10:40</option>
										<option>10.40-11.20</option>
										<option>11.20-12.00</option>
										<option>13.10-13.50</option>
										<option>13.50-14.30</option>
										<option>14.30-15.10</option>
										<option>15.10-15.50</option>

					      </select>
					    </div>


					<button type="submit" class="btn btn-info pull-right" style="margin-top: 5px; margin-bottom: 5px;">Ekle</button>
				</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<p>© Copyright 2018 Abdülbaki & Melih</p>
	</div>


</body>
</html>
