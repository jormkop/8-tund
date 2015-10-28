<?php
	//page_one.php
	
	require_once("session.php");
	
	$_SESSION["name"] = "Jorma";
	
	echo $_SESSION["name"];
?>