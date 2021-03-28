<?php
	$server="localhost";
	$user="Nova";
	$pass="";
	$db="Student";
	$conn = mysqli_connect($server,$user,$pass,$db);
	if($conn)
	{
		echo "connected";

	}
	else{
		mysqli_connect_error();
	}
