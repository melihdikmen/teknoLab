<html>
<h3>Giriş Ekranı</h3>
<form action="" method="post" >

<input type="text" name="username" placeholder="Kullanıcı Adı:">
</br>
<input type="text" name="password" placeholder="Şifre">
</br>
<input type="submit" value="Giriş Yap">
</form>

</html>

<?php


  include ("baglan.php");

  $kullaniciadi=$_POST["username"];
  $sifre=$_POST["password"];


    $sql=mysqli_query($baglan,"select * from admin where kullanicAdi='".$kullaniciadi."', sifre='".$sifre."' ");

      while($oku=mysqli_fetch_array($sql))
      {

        echo "".$oku["kullanicAdi"]." ".$oku["sifre"]."";

      }





  ?>
