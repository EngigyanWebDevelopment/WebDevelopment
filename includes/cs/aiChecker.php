<?php
	if(isset($_SESSION["email"])){
						$myEmail = $_SESSION["email"];
						$password = $_SESSION["password"];

						$retrive = "select * from users where email = '$myEmail' and password = '$password'";
						$result = mysqli_query($con,$retrive);
						while($row = mysqli_fetch_assoc($result)){
							$sid = $row['s_id'];
							$sql = "select * from enrollment where s_id = '$sid' and course = 'AI'";
							$enrollResult = mysqli_query($con,$sql);
							$enrollCount = mysqli_num_rows($enrollResult);
							if($enrollCount == 1){
								echo "<div class='row' id='buttons'>
										<div style='padding: 3px;'><a href='#' class='card-link btn btn-primary'>Go To Webinar will be available soon</a></div>
										<div style='border: 1px solid grey; border-radius: 3px; padding: 5px;'>Google Classroom Code: Will be available soon</div>
									</div>";
								
							}else{
								echo "<div class='row' id='price'><small><strike>Rs. 5000</strike></small> Rs. 3500</div>
										<div class='row' id='buttons'>
<div style='padding: 3px;'><a href='https://localhost/engigyan/PayUMoney/PayUMoney_form.php' class='card-link btn btn-primary'>Pay Now</a></div>
										
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
							$sql = "select * from enrollment where s_id = '$sid' and course = 'AI'";
							$enrollResult = mysqli_query($con,$sql);
							$enrollCount = mysqli_num_rows($enrollResult);
							if($enrollCount == 1){
								echo "<div class='row' id='buttons'>
																				<div style='padding: 3px;'><a href='#' class='card-link btn btn-primary'>Go To Webinar will be available soon</a></div>
										<div style='border: 1px solid grey; border-radius: 3px; padding: 5px;'>Google Classroom Code: Will be available soon</div>
									</div>";
								
							}else{
								echo "<div class='row' id='price'><small><strike>Rs. 5000</strike></small> Rs. 3500</div>
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
							echo "<div class='row' id='price'><small><strike>Rs. 5000</strike></small> Rs. 3500</div>
										<div class='row' id='buttons'>
											<div style='padding: 3px;'><a href='loginOrRegister.php' class='card-link btn btn-primary'>Pay Now</a></div>
										</div>
										<div class='row' id='buttons'>
											<button class='btn btn-outline-danger'>Start Free Demo</button>
										</div>";
						}

		mysqli_close($con);
 ?>