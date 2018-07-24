<?php

	echo "<ul class='navbar-nav ml-auto'>";
        
				if(isset($_SESSION["email"])){
								echo "";
							}
							else if(isset($_COOKIE['gdemail'])){
								echo "";
							}
							else{
								echo "<li class='nav-item' id='spc1'>
									<a class='nav-link' href='#'>
										<div class='link-nav' data-toggle='modal' data-target='#login'>Log In</div>
									</a>
								</li>
								<li class='nav-item' id='spc2'>
									<a class='nav-link' href='#'>
										<div class='link-nav' data-toggle='modal' data-target='#register'>Register</div>
									</a>
								</li>";
							}


	

                           
                            if(isset($_SESSION["email"])){
								            echo "<li class='nav-item dropdown'>";
                 echo "<a class='nav-link' href='#' id='navbardrop' data-toggle='dropdown'>";
                       echo "<div class='link-nav'><span> <i class='fa fa-user' aria-hidden='true'></i>";
                                    echo "Hello ";
                                    echo $_SESSION["username"];
                                }
                                else if(isset($_COOKIE['gdemail'])){
									            echo "<li class='nav-item dropdown'>";
                 echo "<a class='nav-link' href='#' id='navbardrop' data-toggle='dropdown'>";
                       echo "<div class='link-nav'><span> <i class='fa fa-user' aria-hidden='true'></i>";
                                    echo "Hello ";
                                    echo $_COOKIE["gdusername"];
                                }
                                else{
                                    echo "";
                                }
                            
                        
                       
                   echo "</span></div>
                    </a>
                        <div class='dropdown-menu' id='menux'>
                            <a class='dropdown-item' href='logout.php'>Log Out</a>
                        </div>
                </li>
        </ul>";



 ?>