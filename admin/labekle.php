<?php

include ("baglan.php");

$labad=$_POST["labad"];
$labinfo=$_POST["labinfo"];



echo $labad." ".$labinfo." ";


$sql="insert into lab (lab_adi, lab_bilgi) values ('$labad','$labinfo')";




$sonuc=mysqli_query($baglan,"$sql");



if ($sonuc==0)
  echo "Eklenemedi, kontrol ediniz";
else
  echo "Başarıyla eklendi";

mysqli_close($baglan);


?>
