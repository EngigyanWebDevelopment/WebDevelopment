<?php
session_start();
	unset($_SESSION['username']);
    unset($_SESSION['email']);
	unset($_SESSION['password']);
 
    session_unset();
    session_destroy();

    setcookie ("gdusername", "",time()-60*60*24*100, "/");
    setcookie ("gdpassword", "",time()-60*60*24*100, "/");
	setcookie ("gdemail", "",time()-60*60*24*100, "/");
	
	header('Location: https://localhost/engigyan/index.php');


 ?>