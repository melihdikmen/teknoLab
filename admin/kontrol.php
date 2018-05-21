<?php
session_start();

include ('baglan.php');

if($_POST)
{
    $kadi=$_POST["username"];
    $sifre=$_POST["password"];


    if(!$kadi&&!$sifre)
    {
      echo "lütfen tüm alanları doldurun";
    }

    else
    {

      $query=mysqli_query($baglan,"select kullanicAdi,sifre,eposta from admin where kullanicAdi='$kadi' and sifre='$sifre'");
      $okunan=mysqli_fetch_array($query);

      if($okunan>0)
      {
        $_SESSION["giris"]=true;
        $_SESSION["kullanici"]=$kadi;
        $_SESSION["parola"]=$okunan["sifre"];
        $_SESSION["mail"]=$okunan["eposta"];
        header("location:index.php");
      }

      else
      {
        echo "Kullanıcı adı veya şifre yanlış";
          echo "</br><a href='login.php'>Geri Dön</a>";
      }


    }





}






 ?>
