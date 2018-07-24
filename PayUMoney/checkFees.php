<?php
	include 'connection.php';
	
	$q = $_GET['q'];
	
	//sql statement to get the email from the database
	//$sql = "SELECT * FROM users WHERE email = '".$q."'";
	$sql = "SELECT * FROM course_fees WHERE course_name = '$q'";
	$result = mysqli_query($con,$sql);
	
	
	
	while($temp = mysqli_fetch_assoc($result)){
		$message = $temp['fees'];
	}
	
	
	echo $message;


 ?>