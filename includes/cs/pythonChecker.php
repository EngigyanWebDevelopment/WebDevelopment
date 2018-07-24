<?php
	if(isset($_SESSION["email"])){
						$myEmail = $_SESSION["email"];
						$password = $_SESSION["password"];

						$retrive = "select * from users where email = '$myEmail' and password = '$password'";
						$result = mysqli_query($con,$retrive);
						while($row = mysqli_fetch_assoc($result)){
							$sid = $row['s_id'];
							$sql = "select * from enrollment where s_id = '$sid' and course = 'python'";
							$enrollResult = mysqli_query($con,$sql);
							$enrollCount = mysqli_num_rows($enrollResult);
							if($enrollCount == 1){
								echo "<div class='row' id='buttons'>
										<div style='padding: 3px;'><a href='https://attendee.gotowebinar.com/register/1283646132824950273' class='card-link btn btn-primary'>Go To Webinar</a></div>
										<div style='border: 1px solid grey; border-radius: 3px; padding: 5px;'>Google Classroom Code: bquuf2</div>
									</div>";
								
							}else{
								echo "<div class='row' id='price'><small><strike>Rs. 3200</strike></small> Rs. 2000</div>
										<div class='row' id='buttons'>
											<button class='btn btn-primary'>Pay Now</button>
										</div>
										<div class='row' id='buttons'>
											<button class='btn btn-outline-danger'>Start Free Demo</button>
										</div>";
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
							$sql = "select * from enrollment where s_id = '$sid' and course = 'python'";
							$enrollResult = mysqli_query($con,$sql);
							$enrollCount = mysqli_num_rows($enrollResult);
							if($enrollCount == 1){
								echo "<div class='row' id='buttons'>
										<div style='padding: 3px;'><a href='https://attendee.gotowebinar.com/register/1283646132824950273' class='card-link btn btn-primary'>Go To Webinar</a></div>
										<div style='border: 1px solid grey; border-radius: 3px; padding: 5px;'>Google Classroom Code: bquuf2</div>
									</div>";
								
							}else{
								echo "<div class='row' id='price'><small><strike>Rs. 3200</strike></small> Rs. 2000</div>
										<div class='row' id='buttons'>
											<div style='padding: 3px;'><a href='https://localhost/engigyan/PayUMoney/PayUMoney_form.php' class='card-link btn btn-primary'>Pay Now</a></div>
								
										</div>
										<div class='row' id='buttons'>
											<button class='btn btn-outline-danger'>Start Free Demo</button>
										</div>";
							}
						}
						}
						else{
							echo "<div class='row' id='price'><small><strike>Rs. 3200</strike></small> Rs. 2000</div>
										<div class='row' id='buttons'>
											<div style='padding: 3px;'><a href='loginOrRegister.php' class='card-link btn btn-primary'>Pay Now</a></div>
										</div>
										<div class='row' id='buttons'>
											<button class='btn btn-outline-danger'>Start Free Demo</button>
										</div>";
						}


 ?>