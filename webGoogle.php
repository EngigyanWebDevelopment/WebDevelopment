<?php
	include 'connection.php';
	
	if(isset($_SESSION["email"])){
	$myEmail = $_SESSION["email"];
	$password = $_SESSION["password"];

	$retrive = "select * from users where email = '$myEmail' and password = '$password'";
	$result = mysqli_query($con,$retrive);
	while($row = mysqli_fetch_assoc($result)){
	$sid = $row['s_id'];
	$sql = "select * from enrollment where s_id = '$sid' and course = 'Java'";
	$result1 = mysqli_query($con,$sql);
	$c = mysqli_num_rows($result1);
	if($c==1){
		echo "Going good";
		header('Location: https://attendee.gotowebinar.com/register/453367519208804866');
	}
	}
}
else if(isset($_COOKIE['gdemail'])){
	$myEmail = $_COOKIE["gdemail"];
	$password = $_COOKIE["gdpassword"];

	$retrive = "select * from users where email = '$myEmail' and password = '$password'";
	$result = mysqli_query($con,$retrive);
	while($row = mysqli_fetch_assoc($result)){
	$sid = $row['s_id'];
	$sql = "select * from enrollment where s_id = '$sid' and course = 'Java'";
	$result1 = mysqli_query($con,$sql);
	$c = mysqli_num_rows($result1);
	if($c==1){
		echo "Going good";
		header('Location: https://attendee.gotowebinar.com/register/453367519208804866');
	}
	}
}
else{
	echo "Its not possible";
}

mysqli_close($con);

 ?>