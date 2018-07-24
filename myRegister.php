<?php
	include 'connection.php';
	
	$email = $_POST['myemail'];
	$username = $_POST['username'];
	$password = $_POST['pwd1'];
	$repeat_password = $_POST['pwd2'];
	
	echo $password.$repeat_password.$username;
	
	
	if($password==$repeat_password){
	
	$sql="insert into users(name,email,password) values ('$username','$email','$password')";
	$_SESSION["username"] = $username;
	$_SESSION["email"] = $email;
	$_SESSION["password"] = $password;
	
		setcookie("gdusername", $_SESSION['username'], time()+60*60*24*100, "/");
        setcookie("gdpassword", $_SESSION['password'], time()+60*60*24*100, "/");
		setcookie("gdemail", $_SESSION['email'], time()+60*60*24*100, "/");

	
	if(mysqli_query($con,$sql)){
		header('Location: https://localhost/engigyan/PayUMoney/PayUMoney_form.php');
	}
	
	
	
	}
	
	mysqli_close($con);
	
	
	
	
	

 ?>