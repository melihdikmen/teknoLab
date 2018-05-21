<?php
include("baglan.php");

$kullanici=$_POST["username"];


$sifre=$_POST["password"];

$eposta=$_POST["eposta"];

if($kullanici&&$sifre&&$eposta)
{
  $sql="update  admin set   sifre='$sifre' ,kullanicAdi='$kullanici', eposta='$eposta' where kullanicAdi='$kullanici' ";

  $sonuc=mysqli_query($baglan,"$sql");

  if ($sonuc==0)
    echo "Güncellenemedi, kontrol ediniz";
  else
  {  echo "Başarıyla güncellendi.";
    echo "</br>Tekrar giriş yapınız.";
    echo "<a href='login.php'>Giriş Sayası</a>";
  }
  mysqli_close($baglan);
}

else
{
  echo "Tüm alanları doldurmalısınız.";
}




 ?>
