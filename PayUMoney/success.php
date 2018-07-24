<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";
$phone = $_POST["phone"];

include 'connection.php';

if(isset($_SESSION["email"])){
$myEmail = $_SESSION["email"];
$password = $_SESSION["password"];

$retrive = "select * from users where email = '$myEmail' and password = '$password'";
$result = mysqli_query($con,$retrive);
while($row = mysqli_fetch_assoc($result)){
	$sid = $row['s_id'];
	$sql = "insert into enrollment(s_id,name,course,phone_no,email_id) values ($sid,'$firstname','$productinfo','$phone','$myEmail')";
	mysqli_query($con,$sql);
	echo "successfully inserted";
}
}
else if(isset($_COOKIE['gdemail'])){
	$myEmail = $_COOKIE["gdemail"];
	$password = $_COOKIE["gdpassword"];

	$retrive = "select * from users where email = '$myEmail' and password = '$password'";
	$result = mysqli_query($con,$retrive);
	while($row = mysqli_fetch_assoc($result)){
		$sid = $row['s_id'];
	$sql = "insert into enrollment(s_id,name,course,phone_no,email_id) values ('$sid','$firstname','$productinfo','$phone','$myEmail')";
	mysqli_query($con,$sql);
}
}
else{
	echo "Its not possible";
}


mysqli_close($con);



// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		   }
?>	