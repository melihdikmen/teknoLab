
<?php
session_start();

		if(isset($_SESSION["kadi"]))
		{
			$ograd=$_SESSION["kadi"];
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

	<?php

		include ("baglan.php");

		$lab_adi=array();
		$lab_bilgi=array();

		$komut=mysqli_query($baglan,"select distinct lab_adi,lab_bilgi from lab order by lab_adi");
		if(mysqli_num_rows($komut)!=0)
		{
			while($oku_lab_adi=mysqli_fetch_array($komut))
			{
				$lab_adi[]=$oku_lab_adi["lab_adi"];
				$lab_bilgi[]=$oku_lab_adi["lab_bilgi"];
			}
		}else{
			echo "hiç sonuç yok!";
		}

		$lab_adi_krslstr=array();
		$unvan=array();
		$ogrtmn_adi=array();
		$ders_adi=array();
		$ogretim=array();
		$gun=array();
		$saat=array();

		$komut=mysqli_query($baglan,"SELECT lab.lab_adi,lab.lab_bilgi,ogr.unvan,ogr.ad,ogr.soyad,dersler.DersAd,kullanim.Ogretim,kullanim.Gun,kullanim.Saat FROM kullanim,lab,ogr,dersler WHERE kullanim.lab_id=lab.id AND kullanim.OgrId=ogr.Id AND kullanim.DersId=dersler.ID");
		if(mysqli_num_rows($komut)!=0)
		{
			while($oku=mysqli_fetch_array($komut))
			{
				$lab_adi_krslstr[]=$oku["lab_adi"];
				$ogretmen_unvan[]=$oku["unvan"];
				$ogrtmn_adi[]=$oku["ad"];
				$ogrtmn_soy_adi[]=$oku["soyad"];
				$ders_adi[]=$oku["DersAd"];
				$ogretim[]=$oku["Ogretim"];
				$gun[]=$oku["Gun"];
				$saat[]=$oku["Saat"];
			}
		}
		else
		{
			echo "hiç bir sonuç bulunamadı!";
		}

		for ($i=0; $i < count($lab_adi); $i++) {
			echo 	'<div class="container">';
						$indeks=0;
						echo '<h2>'.$lab_adi[$i].'</h2>
				  		<p>'.$lab_bilgi[$i].'</p>
					  	<div class="table-responsive">
					  		<table class="table table-hover">
						    	<thead>
							      	<tr>
								        <th>#</th>
								        <th>Ünvan</th>
								        <th>Öğretim Görevlisi</th>
								        <th>Ders Adı</th>
								        <th>Öğretim</th>
								        <th>Gün</th>
								        <th>Saat</th>
							      	</tr>
						    	</thead>';

						    	for ($j=0; $j < count($lab_adi_krslstr); $j++) {
							    	if($lab_adi[$i]==$lab_adi_krslstr[$j])
							    	{
							    		echo 	'<tbody>
											      	<tr class="success"><!--yeşil-->
												        <td>'.++$indeks.'</td>
												        <td>'.$ogretmen_unvan[$j].'</td>
												        <td>'.$ogrtmn_adi[$j]." ".$ogrtmn_soy_adi[$j].'</td>
												        <td>'.$ders_adi[$j].'</td>
												        <td>'.$ogretim[$j].'</td>
												        <td>'.$gun[$j].'</td>
												        <td>'.$saat[$j].'</td>
											      	</tr>
											    </tbody>';
							    	}
								}

					  		echo '</table>
					  	</div>
					</div>';
		}

	?>



	<div class="footer">
		<p>© Copyright 2018 Abdülbaki & Melih</p>
	</div>

	<?php
		#PHP kodlarının yer alacağı bölüm..
	?>
</body>
</html>
