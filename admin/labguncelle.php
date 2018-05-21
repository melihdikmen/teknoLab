<?php
include("baglan.php");

$ad=$_POST["labad"];


$labbilgi=$_POST["labilgi"];




if($labbilgi)
{
  $sql="update  lab set  lab_bilgi='".$labbilgi."' where lab_adi='".$ad."' ";

  $sonuc=mysqli_query($baglan,"$sql");

  if ($sonuc==0)
    echo "Güncellenemedi, kontrol ediniz";
  else
    echo "Başarıyla güncellendi.";

  mysqli_close($baglan);
}

else
{
  echo "Laboratuvar bilgisi girilmelidir.";
}



 ?>
