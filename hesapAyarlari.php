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
      		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $ograd?> <span class="glyphicon glyphicon-log-in"></span></a>
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
			<div class="panel panel-success">
				<div class="panel-heading">
					Kişisel Bilgiler
				</div>
				<div class="panel-body">
					<label for="ad">Kullanıcı Adı:</label>

					<?php

					include ("baglan.php");

					$komut=mysqli_query($baglan,"select * from ogr where username='".$_SESSION['kadi']."'");
					if(mysqli_num_rows($komut)!=0)
					{
						while($oku=mysqli_fetch_array($komut))
						{
							$kullaniciAdi=$oku["username"];
							$ad=$oku["ad"];
							$soyad=$oku["soyad"];
							$sifre=$oku["password"];
							$unvan=$oku["unvan"];
							$ePosta=$oku["eposta"];
						}
					}

					echo '
					<form action="bilgiGuncelle.php" method="post">
					<input type="text" readonly class="form-control" id="ad" name="kullaniciAd" value='.$kullaniciAdi.'>
					<label for="ad">Ad:</label>
					<input type="text" class="form-control" name="ad" value='.$ad.'>
					<label for="ad">Soyad:</label>
					<input type="text" class="form-control" name="soyad" value='.$soyad.'>
					<label for="ad">Şifre:</label>
					<input type="text" class="form-control" name="sifre" value='.$sifre.'>
					<label for="ad">Ünvan:</label>
					<input type="text" class="form-control" id="unvan" name="unvan" value='.$unvan.'>
					<label for="ad">E-Posta:</label>
					<input type="text" class="form-control" id="eposta" name="eposta" value='.$ePosta.'>
					<button type="submit" class="btn btn-success pull-right" style="margin-top: 5px; margin-bottom: 5px;">Bilgileri Güncelle</button>
					</form>';
					?>
				</div>
			</div>

		</div>
	</div>

	<div class="footer">
		<p>© Copyright 2018 Abdülbaki & Melih</p>
	</div>

	<?php
		#PHP kodlarının yer alacağı bölüm..
	?>
</body>
</html>
