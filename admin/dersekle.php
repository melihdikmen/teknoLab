<?php

include ("baglan.php");

$dersad=$_POST["dersad"];
$ograd=$_POST["ograd"];
$ogrsoyad=$_POST["ogrsoyad"];
if($dersad&&$ograd&&$ogrsoyad)
{
	$sql=mysqli_query($baglan,"select Id from ogretimgorevli where Ad='$ograd' and Soyad='$ogrsoyad'");

	while($oku=mysqli_fetch_array($sql))
	{
		$ogrid=$oku["Id"];
	}
	echo $dersad." ".$ograd." ".$ogrsoyad." ".$ogrid;


	$sql="insert into dersler (DersAd, OgrId) values ('$dersad','$ogrid')";
		$sonuc=mysqli_query($baglan,"$sql");

	if ($sonuc==0)
	  echo "Eklenemedi, kontrol ediniz";
	else
	  echo "Başarıyla eklendi";

	mysqli_close($baglan);
}

else
{
	echo "Tüm alanları doldurmanız gerekmetedir.";
}


?>
