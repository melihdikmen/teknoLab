<?php
session_start();

if($_SESSION["online"]!=true){
	header("location:login.php");
	$ograd="Login";
}
	else {
		$ograd=$_SESSION["kadi"];
	}

?>
