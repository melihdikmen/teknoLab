<?php

$kullaniciadi="root";
$sifre= "";
$host="localhost";
$veritabani="teknolab";

$baglan=mysqli_connect($host,$kullaniciadi,$sifre,$veritabani);
mysqli_set_charset($baglan, "utf8");

if(!$baglan)
{
	die ("Hata".mysqli_connect_error());
}



?>
