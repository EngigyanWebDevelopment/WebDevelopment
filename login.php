<?php
	include 'connection.php';
	
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$uname = $pass = "";
	
	
	$sql = "select * from users where email = '$email' and password = '$password'";
	
	$result = mysqli_query($con,$sql);
	
	$count = mysqli_num_rows($result);
	
	if($count==1){
		
		while($row = mysqli_fetch_assoc($result)){
			$uname = $row["name"];
			$pass = $row["password"];
		}
		
		
		$_SESSION["username"] = $uname;
		$_SESSION["email"] = $email;
		$_SESSION["password"] = $pass;
	
		setcookie("gdusername", $_SESSION['username'], time()+60*60*24*100, "/");
        setcookie("gdpassword", $_SESSION['password'], time()+60*60*24*100, "/");
		setcookie("gdemail", $_SESSION['email'], time()+60*60*24*100, "/");
		
		header('Location: https://localhost/engigyan/index.php');
	}


 ?>