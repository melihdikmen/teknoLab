<?php

include ("baglan.php");

$username=$_POST["username"];
$eposta=$_POST["eposta"];
$password=$_POST["password"];



if($username&&$eposta&&$password)
{
  $sql="insert into admin (kullanicAdi, sifre,eposta) values ('$username','$password','$eposta')";




  $sonuc=mysqli_query($baglan,"$sql");



  if ($sonuc==0)
    echo "Eklenemedi, kontrol ediniz";
  else
    echo "Başarıyla eklendi";

  mysqli_close($baglan);

}


else
 {
  echo "Tüm alanları doldurmanız gereklidir.";
}



?>
