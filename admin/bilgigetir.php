<?php

$q = $_POST['data'];
include("baglan.php");

$sql=mysqli_query($baglan,"select * from ogr where ad='".$q."'");

while($oku=mysqli_fetch_array($sql))
{

  echo $oku['soyad'];
  echo "/";
  echo $oku['unvan'];
  echo "/";
  echo $oku['eposta'];
  echo "/";
  echo $oku['username'];
  echo "/";
  echo $oku['password'];






}


?>
