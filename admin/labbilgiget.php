<?php

$q = $_POST['data'];
include("baglan.php");

$sql=mysqli_query($baglan,"select lab_bilgi from lab where lab_adi='".$q."'");

while($oku=mysqli_fetch_array($sql))
{

  echo $oku['lab_bilgi'];






}


?>
