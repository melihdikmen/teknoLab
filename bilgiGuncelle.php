<?php
include ("baglan.php");

$kullaniciAdi=$_POST["kullaniciAd"];
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$sifre=$_POST["sifre"];
$unvan=$_POST["unvan"];
$eposta=$_POST["eposta"];



$sorgu=mysqli_query($baglan,"UPDATE ogr SET ad = '".$ad."', soyad = '".$soyad."', unvan = '".$unvan."', password = '".$sifre."', eposta = '".$eposta."' WHERE username= '".$kullaniciAdi."' ");

if($sorgu!=0){
  echo "güncellendi<br><a href='hesapAyarlari.php'>Geri Dön</a>";
}

else{
  echo "guncelleneMEdi<br><a href='hesapAyarlari.php'>Geri Dön</a>";

}

?>
