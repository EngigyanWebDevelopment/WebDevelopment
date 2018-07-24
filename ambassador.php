<!DOCTYPE HTML>  
<html>
<head><title>Enter Your Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style> 
.error {color: #FF0000;}
.correct {color: #008000;}
.pinfo {
	box-shadow: 5px 8px 16px 3px rgba(2,3,1,0.2);
    padding: 12px 16px;
    z-index: 1;
	border: 2px solid #FF;
    border-radius: 7px;
	padding: 12px 20px 12px 40px;
	border = 2px dashed #FF00FF;
	
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #008000;
    min-width: 160px;
    box-shadow: 5px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
input[type=text] {
    width: 240px;
    box-sizing: border-box;
    border: 2px solid #FF;
    border-radius: 7px;
    font-size: 14px;
    background-color: white;
    background-image: 'searchbar.png';
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 80%;
}
input:valid {
	border = 2px solid #008000;
}
input:invalid {
	border = 2px dashed #FF00FF;
}

</style>
</head>
<body>  
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
// define variables and set to empty values
$date = date("d/m/Y");
//echo $date;
$date = (string)$date;
$testin = "THIS FUNC IS WORKING";
$name = $email = $gender = $uname = $mobno = $college = $clg = $sqlnewcollege = $sqlenter = $result = "";
$nameErr = $emailErr = $genderErr = $unameerr = $phoneerr = $collgename = $collegeErr = $clgnameErr = "  * ";
?>
<h2>Ambassadors Registration Form</h2>
<h3>Hey !Ambassador Search Your College To get Started and register for our Programme </h3>
<p><span class="error"><strong>* required fields </strong></span></p>
<strong>
<p id="nameentered"></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  
  <fieldset class = "pinfo">
    <legend>Personal information:</legend>
  <strong>Please Upload your image </strong><input type="file" name="fileimg" /><span class="error">*</span><br><br>
  College : <input type="text" id="clgtext" name="myInput" oninput="myFunction()" placeholder="Search Your College : "><span class="error"><?php echo $collegeErr; ?></span>
  <br><br>
  Name: <input type="text" name="name"><span class="error"><?php echo $nameErr; ?></span>
  <br><br>
  E-mail: <input type="text" name="email"><span class="error"><?php echo $emailErr; ?></span>
  <br><br>
  Uname: <input type="text" name="uname"><span class="error"><?php echo $unameerr; ?></span> 
  <br><br>
  Phone: <input type="text" name="phone"><span class="error"><?php echo $phoneerr; ?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other <span class="error"><? php echo "*"; ?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  </fieldset>
</form>
</strong>

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
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  //$dbname = "myDB"
  // Create connection 
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  // Create database
  $sql = "CREATE DATABASE if not exists engigyan";
  $sqlconn = "USE engigyan";
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


</body>
</html>