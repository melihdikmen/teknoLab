<?php
include("baglan.php");

$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$unvan=$_POST["unvan"];
$eposta=$_POST["eposta"];
$username=$_POST["username"];
$password=$_POST["password"];

echo $ad." ".$soyad." ".$unvan." ".$eposta." ".$username." ".$password."";




$sql="update  ogr set  soyad='".$soyad."', unvan='".$unvan."', eposta='".$eposta."', username='".$username."',  password='".$password."' where ad='".$ad."' ";

$sonuc=mysqli_query($baglan,"$sql");

if ($sonuc==0)
  echo "Eklenemedi, kontrol ediniz";
else
  echo "Başarıyla güncellendi.";

mysqli_close($baglan);

 ?>
