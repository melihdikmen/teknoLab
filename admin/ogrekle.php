<?php

include ("baglan.php");

$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$unvan=$_POST["unvan"];
$eposta=$_POST["eposta"];
$username=$_POST["username"];
$password=$_POST["password"];



if($ad&&$soyad&&$unvan&&$eposta&&$username&&$password)
{
  $sql="insert into ogr (ad,soyad,unvan,username,password,eposta) values ('$ad','$soyad','$unvan','$username','$password','$eposta')";

  $sonuc=mysqli_query($baglan,"$sql");



  if ($sonuc==0)
    echo "Eklenemedi, kontrol ediniz";
  else
    echo "Başarıyla eklendi";

  mysqli_close($baglan);
}

else {
  

  echo "Tüm alanları doldurmanız gereklidir.";

}
?>
