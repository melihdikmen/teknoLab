<?php
session_start();

if($_SESSION["giris"]!=true)
{
  header("location:login.php");

}



 ?>
