<?php 
	$sname="localhost";
	$pass="";
	$db="shopifier";
	$uname="root";
	$con = new mysqli($sname,$uname,$pass,$db);
	if ($con->connect_error) {
		echo 'db not connected';
	}
	else{

	}
 ?>