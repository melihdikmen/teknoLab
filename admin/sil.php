<?php
include("baglan.php");

$ad=$_POST["ad"];
$soyad=$_POST["soyad"];



$sql="delete from  ogr   where ad='".$ad."' ";

$sonuc=mysqli_query($baglan,"$sql");

if ($sonuc==0)
  echo "Silinemedi, kontrol ediniz";
else
  echo "Başarıyla silindi";

mysqli_close($baglan);

 ?>
