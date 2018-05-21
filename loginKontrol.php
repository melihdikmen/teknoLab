<?php

session_start();

include ("baglan.php");

if ($_POST) {
	$kAdi=$_POST["username"];
	$sifre=$_POST["password"];

	if (!$kAdi && !$sifre) {
		echo "Lütfen tüm alanların dolu olduğundan emin olun!";
	}
	else{
	    $query=mysqli_query($baglan,"select username,password from ogr where username='".$kAdi."' and password='".$sifre."'");
	    $okunan=mysqli_fetch_array($query);

		if ($okunan>0) {
    	$_SESSION["online"]=true;
			$_SESSION["kadi"]=$kAdi;
			$_SESSION["sifre"]=$sifre;

			header("Location:odev.php");
		}
		else{
        	echo "Kullanıcı adı veya şifre yanlış";
          	echo "</br><a href='login.php'>Geri Dön</a>";
		}
	}
}

?>
