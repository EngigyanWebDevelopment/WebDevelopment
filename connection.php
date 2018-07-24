<?php
	
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "engigyan";
	
	//create the connection
	$con = mysqli_connect($servername,$username,$password,$dbname);
	
	//Checking a connection
	if(!$con)
	{
		die("Connection Failed:".mysqli_connect_error);
	}
 ?>