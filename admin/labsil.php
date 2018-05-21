<?php

include ("baglan.php");

$labad=$_POST['labad'];

$sonuc=mysqli_query($baglan,"delete  from lab where lab_adi='".$labad."' ");




if ($sonuc==0)
  echo "Silinemedi, kontrol ediniz";
else
  echo "Başarıyla silindi.";

mysqli_close($baglan);

?>
