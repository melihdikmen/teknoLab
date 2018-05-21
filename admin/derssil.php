<?php

include ("baglan.php");

$dersad=$_POST['dersad'];

$sonuc=mysqli_query($baglan,"delete  from dersler where DersAd='".$dersad."' ");




if ($sonuc==0)
  echo "Silinemedi, kontrol ediniz";
else
  echo "Başarıyla silindi.";

mysqli_close($baglan);

?>
