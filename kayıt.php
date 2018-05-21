<?php
include ("baglan.php");

$labad=$_POST["labad"];
$dersad=$_POST["dersad"];
$ogretim=$_POST["ogrenim"];
$gun=$_POST["gun"];
$saat=$_POST["saat"];


$sorgu=mysqli_query($baglan,"SELECT lab.id, ogr.Id,dersler.ID from lab,ogr,dersler where lab.lab_adi='$labad' and  ogr.ad='$ogretim' and dersler.DersAd='$dersad' ");

$okunan=mysqli_fetch_array($sorgu);
echo $okunan["ID"];
  $sonuc=mysqli_query($baglan,"select * from kullanim where lab_id='$okunan[id]' and Gun='$gun' and Saat='$saat' ")  ;

  if(mysqli_fetch_array($sonuc)==0)
  {
    $sonuc=mysqli_query($baglan,"insert into kullanim (lab_id,OgrId,DersId,Gun,Saat) values ('$okunan[id]','$okunan[Id]','$okunan[ID]','$gun','$saat') ");

    if ($sonuc==0)
      echo "Eklenemedi, kontrol ediniz";
    else
      echo "Başarıyla eklendi";

    mysqli_close($baglan);
  }

  else
  {

     echo "Seçilen zamanda kullanımda.";

  }



 ?>
