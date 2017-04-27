<?php
session_start();
if (isset($_SESSION['loggedin'])){
	$_SESSION['logout']='logout';
	unset($_SESSION['loggedin']);
	
	}
	header ("Location:index.php");
	

?>