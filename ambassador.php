<script>
function checkappl() {
	var x = document.getElementById("search").value;
	document.getElementById("nameentered").innerHTML = "YOU WWWWRRROOOTTTEEEE "+x;
}

function myFunction() {
    var x = document.getElementById("clgtext").value;
    document.getElementById("nameentered").innerHTML = "The College Entered By <strong>YOU</strong> : " + x;
}
</script>
<?php
date_default_timezone_set('Asia/Kolkata');
// define variables and set to empty values
$date = date("d/m/Y");
//echo $date;
$date = (string)$date;
$testin = "THIS FUNC IS WORKING";
$name = $email = $gender = $uname = $mobno = $college = $clg = $sqlnewcollege = $sqlenter = $result = "";
$nameErr = $emailErr = $genderErr = $unameerr = $phoneerr = $collgename = $collegeErr = $clgnameErr = "  * ";
?>
<br><br>
<div class="containe-fluid">
<div class="ghghk highlights2"><h3>Ambassadors Registration Form</h2></div>
<div class="ghghk"><h6>Hey !Ambassador Search Your College To get Started and register for our Programme </h6></div>
<p id="nameentered"></p>
  <div class="containe">
<form class="amd-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  
    <legend>Personal information:</legend>
    <p><span class="error"><strong>* required fields </strong></span></p>
  <strong>Please Upload your image </strong><input type="file"  id="tex_i" name="fileimg" /><span class="error">*</span><br><br>
  
  <table class="amb-table">
    <tr>
      <td> College : </td>
      <td><input type="text" id="clgtext" name="myInput" oninput="myFunction()" placeholder="Search Your College : "><span class="error"><?php echo $collegeErr; ?></span>  </td> 
    </tr> 
    <tr>
      <td>Name:</td>  
      <td><input type="text" name="name" id="tex_i"><span class="error"><?php echo $nameErr; ?></span></td> 
    </tr>
    <tr>
      <td>E-mail: </td> 
      <td><input type="text" name="email" id="tex_i"><span class="error"><?php echo $emailErr; ?></span></td> 
    </tr>
    <tr>
      <td>Uname:</td> 
      <td><input type="text" name="uname" id="tex_i"><span class="error"><?php echo $unameerr; ?></span> </td> 
    </tr>
    <tr>
      <td>Phone:</td>  
      <td><input type="text" name="phone" id="tex_i"><span class="error"><?php echo $phoneerr; ?></span></td> 
    </tr>
    <tr>
      <td>Gender:</td> 
      <td>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other <span class="error"><?php echo "*";?></span>
      </td>
    </tr>
  </table>
 
  

  <input type="submit" name="submit" value="Submit">  
</form>
  </div>
</div>
<br><br>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$filetmp = $_FILES["fileimg"]["tmp_name"];
	$filename = $_FILES["fileimg"]["name"];
	$filetype = $_FILES["fileimg"]["type"];
	$filepath = "photo/".$filename;
	if($filetype !== 'image/png')
	{ $errPhoto = "Unsupported type of file uploaded";
      echo "<br><strong><span class='error'>$errPhoto</strong>";
	  exit();
	}
	else {
	move_uploaded_file($filetmp,$filepath);
	 echo "<br><strong><span class='correct'>Congratulations The photo has been uploaded successfully</strong>";
	 echo "                                           <img src = '$filepath'  alt='Smiley face' height='75' width='75'>";
	 }
	if (empty($filename)) {
    $imageErr = "Image is to be uploaded * required";
	//echo $clgnameErr;
	couldnotbesaved($imageErr);
	exit();
  }
    if (empty($_POST["myInput"])) {
    $clgnameErr = $clgnameErr . "College Name is required";
	//echo $clgnameErr;
	couldnotbesaved($clgnameErr);
	exit();
  } else {
    $collgename = test_input($_POST["myInput"]);
  }
	if (empty($_POST["name"])) {
    $nameErr = $nameErr . "Name is required";
	couldnotbesaved($nameErr);
	exit();
  } else {
      //$nameErr = "Only letters and white space allowed in name"; 
	  //couldnotbesaved($nameErr); 
	  $name = test_input($_POST["name"]);    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    couldnotbesaved($emailErr);
	exit();
  } else { if(strpos($_POST["email"],'.com') === false || strpos($_POST["email"],'@') === false){
	  $emailErr = "Email entered is not valid";
      couldnotbesaved($emailErr);
	  exit();
  }
  else
  {
    $email = test_input($_POST["email"]);
  }
  }
    
  if (empty($_POST["uname"])) {
    $unameerr = "User Name is required";
  	couldnotbesaved($unameerr);
	exit();
  } else {
    $uname = test_input($_POST["uname"]);;
  }

  if (empty($_POST["phone"])) {
    $mobno = "";
	$phoneerr = "Phone Number is required";
	couldnotbesaved($phoneerr);
	exit();
	
  } else {
	  if(strlen($_POST["phone"]) !== 10){ 
	  $phoneerr = "Phone Number entered is not valid";
      couldnotbesaved($phoneerr);
	  exit();
  }
  else
  {
    $mobno = test_input($_POST["phone"]);
  }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
	couldnotbesaved($genderErr);
	exit();
  } else {
    $gender = test_input($_POST["gender"]);
  } 
  
  //echo "<h2>Your Input:</h2>";
  //echo "NAME : ".$name;
  //echo "<br>";
  //echo "EMAIL : ".$email;
  //echo "<br>";
  //echo "UNAME : ".$uname;
  //echo "<br>";
  //echo "MOb NO. ".$mobno;
  //echo "<br>";
  //echo "Gender : ".$gender;
  
  $servername = "111.118.215.77";
  $username = "smbdu8tr_aakash";
  $password = "Aakash@1234";
  //$dbname = "myDB"
  // Create connection 
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  // Create database
  $sql = "CREATE DATABASE if not exists smbdu8tr_engigyan";
  $sqlconn = "USE smbdu8tr_engigyan";
  $sqltable = "CREATE TABLE IF NOT EXISTS ambassadors (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          NAME VARCHAR(100) NOT NULL,
          COLLEGE VARCHAR(100) NOT NULL,
          EMAIL VARCHAR(50),
          reg_date VARCHAR(40),
		  PHONE varchar(10),
		  GENDER varchar(10),
		  img_name varchar(500),
		  img_path varchar(500),
		  img_type varchar(500)
        )";
  $sqltablecollege = "CREATE TABLE IF NOT EXISTS college_name (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          NAME VARCHAR(100) NOT NULL,
		  ADDRESS varchar(500),
		  PEOPLE int
        )";
  $date = date("Y/m/d");
  
  $conn->query($sql);
  $conn->query($sqlconn);
  $conn->query($sqltable);
  $conn->query($sqltablecollege);
  if ($conn->query($sqltable) === TRUE) {
  $college = 'DUMMY';
  $sqlenter = "INSERT INTO ambassadors (name,college,email,phone,gender,reg_date,img_name,img_path,img_type) VALUES('$name','$collgename','$email','$mobno','$gender', '$date', '$filename','$filepath','$filetype')";
  //$result = $conn->query($sqlenter);
  //echo $sqlenter;
  //$checkcollege = "SELECT PEOPLE,id FROM COLLEGE WHERE NAME like '%$collgename'%";
  $checkcollege = "SELECT name,phone FROM ambassadors WHERE college like '$collgename'";
  //echo $checkcollege;
  $result = $conn->query($checkcollege);
  echo "<br><strong>Congratulations You've Successfully Enrolled in our programme</strong>";
  if ($result->num_rows > 0) {
	echo "<br><br> People Who have already enrolled in our programme from your College :<strong> $collgename </strong>";
    echo "<table border: 6px><tr><th>NAME</th><th>CONTACT NUMBER</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["phone"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<strong><h4> Ohno ! No one has joined our platform from your college : $collgename yet. <br>
              Although You can be the first one to Join here. </h4></strong>";
}
  
  //while($row = $result->fetch_assoc()) {
	//  echo "names " . $row["id"] . $row["people"];}
   $sqlnewcollege = "INSERT INTO college_name (name,people) VALUES('$collgename',1)";
   $conn->query($sqlnewcollege);
  }
  if ($conn->query($sqlenter) === TRUE) {
    //echo "We've Saved Your Response";
  }
  else
  { echo "Data NOT entered successfully" . $conn->error;
  }
  $conn->close();
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function couldnotbesaved($data) {
	echo "<br><strong><span class='error'> Your Data could not be saved due to the following problem : <br>                       $data </span></strong><br> and other errors may also be present";
}
//if($_GET){
    //if(isset($_GET['Search the entered college'])){
		//$nameC = test_input($_POST["search"]);
        //$sqlcol = "INSERT INTO College (name) VALUES('$nameC')";
		//$conn->query($sqlcol);
    //}
?>

