<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'>
    <meta name="description" content="Engigyan.com is a leading online learning and training platform in India which aims at improving your Software & programming Skills using a real-time virtual learning environment.Enhance your skills and knowledge with Engigyan's Classroom Training, Custom Training, Passport Training, Google Classroom, Virtual Training enviroment.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Engigyan.com|Live Training</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <link rel="stylesheet" href="preloader/css/loader.css">
    <script src="preloader/js/loader.js"></script>
    <script>
        function lightbg_clr() {
            $('#qu').val("");
            $('#textbox-clr').text("");
            $('#search-layer').css({"width":"auto","height":"auto"});
            $('#livesearch').css({"display":"none"});	
            $("#qu").focus();
        };
 
        function fx(str)
        {
            var s1=document.getElementById("qu").value;
            var xmlhttp;
            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                document.getElementById("search-layer").style.width="auto";
                document.getElementById("search-layer").style.height="auto";
                document.getElementById("livesearch").style.display="block";
                $('#textbox-clr').text("");
                return;
            }
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                    document.getElementById("search-layer").style.width="100%";
                    document.getElementById("search-layer").style.height="";
                    document.getElementById("livesearch").style.display="block";
                    $('#textbox-clr').text("X");
                }
            }
            xmlhttp.open("GET","includes/call_ajax.php?n="+s1,true);
            xmlhttp.send();	
        }
    </script>
</head>
<body onload="mac()">
    <div class="preloader-overlay" id="preloader">
        <div class="cube-wrapper">
            <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
            </div>
            <span class="loading" data-name="Loading">Loading</span>
        </div>
    </div>  
    <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
    <a class="navbar-brand" href="https://engigyan.com/"><img class="img-fluid" src="images/engigyan.png" alt="" id="logo"> EngiGyan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="link-nav">HOME</div>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                    <div class="link-nav">CATEGORIES <span style="font-size: 12px !important;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span> </div>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="menu">
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Computer Science</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="includes/cs/cpp.php">C++</a></li>
                            <li><a class="dropdown-item" href="includes/cs/java.php">JAVA</a></li>
                            <li><a class="dropdown-item" href="includes/cs/mysql.php">MySQL</a></li>
                            <li><a class="dropdown-item" href="includes/cs/python.php">Python</a></li>
                            <li><a class="dropdown-item" href="includes/cs/linux.php">LINUX</a></li>
                            <li><a class="dropdown-item" href="includes/cs/cloudcomp.php">Cloud Computing</a></li>
                            <li><a class="dropdown-item" href="includes/cs/robotics.php">Robotics</a></li>
                            <li><a class="dropdown-item" href="includes/cs/ai.php">Artificial Intelligence</a></li>
                            <li><a class="dropdown-item" href="includes/cs/bigdata.php">Big Data</a></li>
                            <li><a class="dropdown-item" href="includes/cs/matlab.php">MATLAB</a></li>
                            <li><a class="dropdown-item" href="includes/cs/webdev.php">Web Developement</a></li>
                            <li><a class="dropdown-item" href="includes/cs/appdev.php">App Developement</a></li>
                            <li><a class="dropdown-item" href="includes/cs/ml.php">Machine Learning</a></li>
                            <li><a class="dropdown-item" href="includes/cs/digimarket.php">Digital Marketing</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Mechanical Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="includes/mechanical/solidworks.php">SolidWorks</a></li>
                            <li><a class="dropdown-item" href="includes/mechanical/catia.php">CATIA</a></li>
                            <li><a class="dropdown-item" href="includes/mechanical/autocad.php">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="includes/mechanical/ansys.php">ANSIS</a></li>
                            <li><a class="dropdown-item" href="#">CDF Analysis</a></li>
                            <li><a class="dropdown-item" href="#">Hyper Works</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Civil Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="includes/mechanical/autocad.php">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="#">AutoDesk</a></li>
                            <li><a class="dropdown-item" href="#">3D MAX</a></li>
                            <li><a class="dropdown-item" href="#">Running Suits</a></li>
                            <li><a class="dropdown-item" href="#">AutoDesk</a></li>
                            <li><a class="dropdown-item" href="#">Sketch Up</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Electrical Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="matlab.php">MATLAB</a></li>
                            <li><a class="dropdown-item" href="#">IOT</a></li>
                            <li><a class="dropdown-item" href="#">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="#">PLC</a></li>
                            <li><a class="dropdown-item" href="#">VLSI</a></li>
                            <li><a class="dropdown-item" href="#">Python</a></li>
                        </ul>
                    </li>
                </ul>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="link-nav">AUTO E PREP</div>
                </a>
            </li>   
            <li class="nav-item">
                <a class="nav-link" href="includes/aboutus.php">
                    <div class="link-nav">ABOUT US</div>
                </a>
            </li> 
        </ul>
        <?php include 'navbarCheck.php' ?>
    </div>  
    </nav>
    <!-- modal box for login-->
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="text-align: center !important;">
                    <center><h3 class="modal-title">Log In to Your Account</h3></center>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method = "post">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder="ex:abc@example.com" name = "email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Password" name = "pwd">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                            <div class="col">
                                or <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        Don't have an Account? &nbsp; <a href="" data-dismiss="modal" data-toggle="modal" data-target="#register">Sign Up</a>
                    </div>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal box for registeration-->
    <div id="register" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="text-align: center !important;">
                    <center><h3 class="modal-title">Create Account</h3></center>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form action="regstration.php" method = "post">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name Here" name = 'username'>
                            </div>
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder="ex:abc@example.com"  name = 'myemail'>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd1" placeholder="Password" name = "pwd1">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Repeat Password:</label>
                            <input type="password" class="form-control" id="pwd2" placeholder="Repeat Password" name = "pwd2">
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </div>
                        <div class="row" id="policy_l">
                                By signing up , you agree to our <a href="http://"> Terms Of Use </a> and <a href="http://"> Privacy Policy.</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        Already have an account? <a href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Sign In</a>
                    </div>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="s_img">
        <img src="images/Screenshot2.png" alt="" class="" id="s_img0">
        <div class="s_img2">
            <div class="ayz">
                <center><h1>We are leading Live Online training provider in india</h1></center>
            </div>
            <div class="search">
                <form action="search.php" method="get">
                    <div class="bk">
                        <input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="Search.." tabindex="1">
                        <button type="submit" class="query-submit" tabindex="2"><i class="fa fa-search" style="color:#727272; font-size:20px"></i></button>
                        <div id="livesearch"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="vbvb">
        <div class="container" id="bnb">
            <div class="large-4 columns">
                <div class="owl-seven owl-carousel owl-theme">
                    <div class="item">
                        <div class="card" id="c6">
                            <div class="card-header"><center><h5> Live Tutorials </h5></center></div>
                            <div id="demz" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" id="bbbb">
                                    <div class="carousel-item active"> 
                                        <img class="card-img-top mx-auto d-block" src="images/java.png" alt="Card image" id="c-imgx1">
                                        <div class="card-body" id="cbody1">
                                            <p id="timer"></p>
                                            <p class="c6-text">Live Video: <span id="upcour"></span></p>
                                            <div ><a href="#" class="card-link btn btn-primary">View Now</a></div>
                                        </div>
                                    </div>
                                    <div class="carousel-item" id="cit1">
                                        <img class="card-img-top mx-auto d-block" src="images/java.png" alt="Card image" id="c-imgx2">
                                        <div class="card-body" id="cbody1">
                                            <p id="timer1"></p>
                                            <p class="c6-text">Live Video: <span id="upcour1"></span></p>
                                            <div ><a href="#" class="card-link btn btn-primary">View Now</a></div>
                                        </div>
                                    </div>
                                    <div class="carousel-item" id="cit">
                                        <img class="card-img-top mx-auto d-block" src="images/java.png" alt="Card image" id="c-imgx3">
                                        <div class="card-body" id="cbody1">
                                            <p id="timer2"></p>
                                            <p class="c6-text">Live Video: <span id="upcour2"></span></p>
                                            <div ><a href="#" class="card-link btn btn-primary">View Now</a></div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#demz" data-slide="prev">
                                        <span class="carousel-control-prev-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demz" data-slide="next">
                                        <span class="carousel-control-next-icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card" id="c6">
                            <div class="card-header"><center><h5>Indusrty Projects</h5></center></div>   
                            <div class="team-member2 text-center2">
                                <div class="team-img2">
                                    <img src="images/industry.gif" class="card-img-top img-fluid" alt="" id="c-img3">
                                    <div class="overlayy">
                                        <div>No. Of Projects</div>
                                        <div class="team-details2">
                                            <div><p>Mech.: 3</p>
                                            <p>C.S: 4</p></div>
                                            <div><p>Civil.: 3</p>
                                            <p>Electrical: 4</p></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="c6-text" style="text-align: center !important; margin-top: 5px !important;">Want to take some industry Projects?</p>
                            </div>
                            <div style="text-align: center !important;"><a href="includes/projects.php" class="card-link btn btn-primary">View Now</a></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card" id="c6">
                            <div class="card-header"><center><h5>Google Classroom</h5></center></div>
                            <img class="card-img-top img-fluid" src="images/googleclass.png" alt="Card image" id="c-img3">
                            <div class="card-body" id="cbody1">
                                <p class="c6-text">Want to watch recorded Video lectures?</p>
                                <div class="dropdown"><button type="button" class="btn btn-primary" onclick="func()">View Courses</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlayz">
        <span class="btnclose2" onclick="closeover()">&times;</span>
        <div class="overlaycontainerz">
            <div id="gc">Google Classroom</div>
            <div class="drop"><button class="btn btn-light btn-block dropdown-toggle" data-toggle="dropdown">Select The Course</button>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="menu3">
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Computer Science</a>
                        <ul class="dropdown-menu" id="sub-menu2">
                            <li><a class="dropdown-item" href="includes/cs/cpp.php">C++</a></li>
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTQ4MTcwMzI4NTBa/sort-last-name" target="_blank">JAVA</a></li>
                            <li><a class="dropdown-item" href="includes/cs/mysql.php" target="_blank">MySQL</a></li>
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTQ4MzMyNjQxOTZa/sort-last-name" target="_blank">Python</a></li>
                            <li><a class="dropdown-item" href="includes/cs/linux.php" target="_blank">LINUX</a></li>
                            <li><a class="dropdown-item" href="https://classroom.google.com/c/MTQ4NDA0MjIyNTla" target="_blank">Robotics</a></li>
                            <li><a class="dropdown-item" href="includes/cs/ai.php" target="_blank">Artificial Intelligence</a></li>
                            <li><a class="dropdown-item" href="includes/cs/digimarket.php">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="includes/cs/bigdata.php">Big Data</a></li>
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTQ4MzMxODg1Mzla/sort-last-name" target="_blank">MATLAB</a></li>
                            <li><a class="dropdown-item" href="includes/cs/webdev.php" target="_blank">Web Developement</a></li>
                            <li><a class="dropdown-item" href="includes/cs/appdev.php" target="_blank">App Developement</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">Machine Learning</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Mechanical Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu2">
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTEzNjAzMzAyMzRa/sort-last-name" target="_blank">SolidWorks</a></li>
                            <li><a class="dropdown-item" href="includes/mechanical/catia.php" target="_blank">CATIA</a></li>
                            <li><a class="dropdown-item" href="includes/mechanical/autocad.php" target="_blank">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTEyOTQyNjg1MDJa/sort-last-name" target="_blank">ANSIS</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">CDF Analysis</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">Hyper Works</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Civil Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu2">
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTQ4MzE4MjA4Njla/sort-last-name" target="_blank">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">AutoDesk</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">3D MAX</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">Running Suits</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">AutoDesk</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">Sketch Up</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Electrical Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu2">
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTQ4MzMxODg1Mzla/sort-last-name" target="_blank">MATLAB</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">IOT</a></li>
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTQ4MzE4MjA4Njla/sort-last-name" target="_blank">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">PLC</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank">VLSI</a></li>
                            <li><a class="dropdown-item" href="https://classroom.google.com/r/MTQ4MzMyNjQxOTZa/sort-last-name" target="_blank">Python</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" id="top_courses">
        <div class="row" id="c_name">
            <div class="hhh"><h3>Trending Courses</h3></div>
        </div>
        <section id="dem">
            <div class="" style=";padding-top: 20px !important;">
                <div class="large-8 columns">
                    <div class="owl-one owl-carousel owl-theme">
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img" src="images/java.png" alt="Card image" id="">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">JAVA</h5>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2200</p>
                                    <div><a href="includes/cs/java.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img" src="images/python.png" alt="Card image" id="">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Python</h5>
                                    <p class="card-text"<small><strike>Rs. 3200</strike></small> Rs. 2000</p>
                                    <div><a href="includes/cs/python.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img img-fluid" src="images/ai.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">A.I</h5>
                                    <p class="card-text"><small><strike>Rs. 5000</strike></small> Rs. 3500</p>
                                    <div><a href="includes/cs/ai.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img img-fluid" src="images/webdev.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Web Developement</h5>
                                    <p class="card-text"><small><strike>Rs. 5500</strike></small> Rs. 5000</p>
                                    <div><a href="includes/cs/webdev.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img img-fluid" src="images/ansis.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">ANSYS</h5>
                                    <p class="card-text"><small><strike>Rs. 2500</strike></small> Rs. 1800</p>
                                    <div><a href="includes/mechanical/ansys.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img img-fluid" src="images/hyperworks.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">HyperWorks</h5>
                                    <p class="card-text"><small><strike>Rs. 2800</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img img-fluid" src="images/autocad.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">AutoCad</h5>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2000</p>
                                    <div><a href="includes/mechanical/autocad.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img img-fluid" src="images/ml.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Machine Learning</h5>
                                    <p class="card-text"><small><strike>Rs. 5500</strike></small> Rs. 4000</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="jumbotron jumbotron-fluid" id="init">
        <div class="container">
            <div class="row">
                <div class="col" id="div1">
                    <center><h2>Training from EngiGyan</h2></center> 
                    <p id="pip">Improve your Software & programming Skill and knowledge with online/Virtual training on your Phone, Tablet, Laptop over the internet, using a real-time virtual learning environment. EngiGyan offers certified training that all demanding skill in all  engineering field with different programming & simulation software like Java, C, C++, PHP, Python, SQL, JavaScript, CAD & CAE Software and many more throughout country including Delhi, Mumbai, Bengaluru, Chennai, Kolkata, Hyderabad, Pune, Ahmedabad, Kanpur, Patna etc. We offer training online, on-site, as well as customized to meet student's needs. </p> 
                </div>
                <div class="col"  id="div2">
                    <center><h2>Our Trainers</h2></center>
                    <p id="pip">Our trainers at EngiGyan are from best institutions & training centre in India and they have a good teaching experience. We guarantee you will be trained by an expert in the software & subjects you are learning. All of our instructors are very well spoken and communicate the course materials in a clear and thorough manner.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="highlights"><h3 style="text-align: center !important;">How Can We Enhance you Skills?</h3><br></div>
    <div class="container-fluid" id="how">
        <div class="container">
            <table class="table">
                <tbody>
                    <tr>
                        <td style="vertical-align: middle" id="img1-td"><img src="images/tab1_img1.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h4 id="img1-h">Classroom Training</h4><p id="pip">Plan for your training requirements by viewing the classroom courses available for CAD & CAE, including, SOLIDWORKS, CATIA,  AUTOCAD, ANSYS, HYPERMESH, MatLab, PDMS and more.</p></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle" id="img1-td"><img src="images/tab1_img2.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h4 id="img1-h">Custom Training</h4><p id="pip">Some users require more specialized training outside our posted courses. We offer custom training for software platforms, design process techniques, project management, certified exam preparation, and much more. We also arrange for Custom CAD & CAE Training at customer facilities to save them travel expenses and to provide a condensed curriculum.</p></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle" id="img1-td"><img src="images/tab1_img3.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h4 id="img1-h">Passport Training</h4><p id="pip">For those new to CAD & CAE softwares who are committed to getting up to speed quickly, EngiGyan offers an Exclusive Discounted Training Program called the EngiGyan Passport Training. For a one-time fee, the 7 most popular CAD & CAE software Training classes are available for an individual student to take once each over a 12 month period.</p></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle" id="img1-td"><img src="images/tab1_img4.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h4 id="img1-h">Google Classroom</h4><p id="pip">We provide Google Classroom to registered Students & professional so that they can view the Topicwise Courses, Study material PDF, Homework models you can upload your homework & Submit the Homework Solution.</p></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle" id="img1-td"><img src="images/tab1_img5.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h4 id="img1-h">Virtual Training</h4><p id="pip">Our Virtual Training is instructor led training for CAD & CAE softwares, Certified Exam Preparation delivered LIVE over the Web, can be access on Smart Phone, Tablet & Laptop and is available for select course offerings. Our virtual classes follow the exact same curriculum as our classroom training but with the convenience of remaining in your home or office!</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="highlights"><h1 style="text-align: center !important;">Training Highlights</h1><br></div>
    <div class="container-fluid" id="thi">
        <div class="container"> 
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <center><h5 class="card-title">Top Certified Instructors </h5></center>
                            <p class="card-text">Over 20+ certified instructors with unequalled industry experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <center><h5 class="card-title">State-of-the-Art</h5></center>
                            <p class="card-text">Interactive Students & teachers setups create a collaborative training experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <center><h5 class="card-title">Mobile Training Capabilities</h5></center>
                            <p class="card-text">We can bring a great training experience right to our customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlights"><h3 style="text-align: center !important;">What Do You Get Here!!</h3><br></div>
    <div class="container-fluid" id="here">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/cr_img1.png" alt="Card image" id="c-img6">
                        <div class="card-body" id="cbody1">
                            <center><h5 class="card-title">Certified Training</h5></center>
                            <p class="card-text">At the end of training you will be awarded with certificate of completion.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/cr_img2.png" alt="Card image"  id="c-img6">
                        <div class="card-body" id="cbody1">
                            <center><h5 class="card-title">Placement Training</h5></center>
                            <p class="card-text">Get complimentary access to placement training to ace your internship/job hunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/cr_img3.png" alt="Card image"  id="c-img6">
                        <div class="card-body" id="cbody1">
                            <center><h5 class="card-title">Industrial Project</h5></center>
                            <p class="card-text">Learn to build 2D draft and 3D models in CAD & CAE softwares.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/cr_img4.png" alt="Card image" id="c-img6">
                        <div class="card-body" id="cbody1">
                            <center><h5 class="card-title">Live Chat Support</h5></center>
                            <p class="card-text">Interact with teaching expert over 1 hour daily live interface.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/cr_img5.png" alt="Card image" id="c-img6">
                        <div class="card-body" id="cbody1">
                            <center><h5 class="card-title">Forum Support</h5></center>
                            <p class="card-text">Post your queries on Google Classroom & get it answered within 24 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/cr_img6.png" alt="Card image" id="c-img6">
                        <div class="card-body" id="cbody1">
                            <center><h5 class="card-title">Hands On Exercises</h5></center>
                            <p class="card-text">Your training is packed with assessment test,code challenges,quizzes and exercises.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="courses">
        <div class="row" id="c_name">
            <div class="hhh"><h3 style="">Computer Science Courses</h3></div>
        </div>
        <section id="demos">
            <div class="">
                <div class="large-13 columns">
                    <div class="owl-two owl-carousel owl-theme" style="padding-bottom: 0px !important;">
                        <div class="item" style="padding-bottom: 0px !important;">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/java.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">JAVA</h5>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2200</p>
                                    <div><a href="includes/cs/java.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="padding-bottom: 0px !important;">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/python.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Python</h5>
                                    <p class="card-text"<small><strike>Rs. 3200</strike></small> Rs. 2000</p>
                                    <div><a href="includes/cs/python.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="padding-bottom: 0px !important;">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ai.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">A.I</h5>
                                    <p class="card-text"><small><strike>Rs. 5000</strike></small> Rs. 3500</p>
                                    <div><a href="includes/cs/ai.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/matlab.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">MATLAB</h5>
                                    <p class="card-text"><small><strike>Rs. 4500</strike></small> Rs. 3600</p>
                                    <div><a href="includes/cs/matlab.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/cpp.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">C++</h5>
                                    <p class="card-text"><small><strike>Rs. 2200</strike></small> Rs. 1800</p>
                                    <div><a href="includes/cs/cpp.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/appdev.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">App Developement</h5>
                                    <p class="card-text"><small><strike>Rs. 4500</strike></small> Rs. 3500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ml.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Machine Learning</h5>
                                    <p class="card-text"><small><strike>Rs. 5500</strike></small> Rs. 4000</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/digimarket.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Digital Marketing</h5>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2000</p>
                                    <div><a href="includes/cs/digimarket.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/networking.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Networking</h5>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/mysql.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">MySQL</h5>
                                    <p class="card-text"><small><strike>Rs. 2200</strike></small> Rs. 1800</p>
                                    <div><a href="includes/cs/mysql.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/linux.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">LINUX</h5>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2500</p>
                                    <div><a href="includes/cs/linux.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/bigdata2.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Big Data</h5>
                                    <p class="card-text"><small><strike>Rs. 5500</strike></small> Rs. 4000</p>
                                    <div><a href="includes/cs/bigdata.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/robotics.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Robotics</h5>
                                    <p class="card-text"><small><strike>Rs. 6500</strike></small> Rs. 4500</p>
                                    <div><a href="includes/cs/bigdata.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="row" id="c_name">
            <div class="hhh"><h3>Mechanical Engineering Courses</h3></div>
        </div>
        <section id="demos">
            <div class="">
                <div class="large-8 columns">
                    <div class="owl-three owl-carousel owl-theme">
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/cdf.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">CDF Analysis</h5>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/catia.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">CATIA</h5>
                                    <p class="card-text"<small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div><a href="includes/mechanical/catia.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autocad.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">AutoCAD</h5>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2000</p>
                                    <div><a href="includes/mechanical/autocad.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/solidworks2.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">SolidWorks</h5>
                                    <p class="card-text"><small><strike>Rs. 3200</strike></small> Rs. 2000</p>
                                    <div><a href="includes/mechanical/solidworks.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ansys.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">ANSYS</h5>
                                    <p class="card-text"><small><strike>Rs. 2500</strike></small> Rs. 1800</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/hyperworks.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">HyperWorks</h5>
                                    <p class="card-text"><small><strike>Rs. 4500</strike></small> Rs. 3500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/java.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">JAVA</h5>
                                    <p class="card-text"><small><strike>Rs. 3200</strike></small> Rs. 2800</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/python.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Python</h5>
                                    <p class="card-text"><small><strike>Rs. 3200</strike></small> Rs. 2000</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="row" id="c_name">
            <div class="hhh"><h3>Civil Engineering Courses</h3></div>
        </div>
        <section id="demos">
            <div class="ed3">
                <div class="large-6 columns">
                    <div class="owl-four owl-carousel owl-theme">
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/3dmax.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">3D MAX</h5>
                                    <p class="card-text"><small><strike>Rs. 3100</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/runningsuits.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Running Suits</h5>
                                    <p class="card-text"<small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div><a href="includes/mechanical/catia.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autodesk.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">AutoDesk</h5>
                                    <p class="card-text"><small><strike>Rs. 3300</strike></small> Rs. 2500</p>
                                    <div><a href="includes/mechanical/autocad.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autocad.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">AutoCAD</h5>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/revit.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">AutoDesk Revit</h5>
                                    <p class="card-text"><small><strike>Rs. 4000</strike></small> Rs. 3000</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/sketchup2.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Sketch Up</h5>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="row" id="c_name">
            <div class="hhh"><h3>Electrical Engineering Courses</h3></div>
        </div>
        <section id="dem">
            <div class="">
                <div class="large-7 columns">
                    <div class="owl-five owl-carousel owl-theme">
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/matlab.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">MATLAB</h5>
                                    <p class="card-text"><small><strike>Rs. 4200</strike></small> Rs. 3500</p>
                                    <div><a href="includes/cs/matlab.php" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/iot.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">IOT</h5>
                                    <p class="card-text"<small><strike>Rs. 5200</strike></small> Rs. 4500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/plc.jpeg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">PLC</h5>
                                    <p class="card-text"><small><strike>Rs. 6000</strike></small> Rs. 5000</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autocad.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">AutoCAD</h5>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/revit.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">AutoDesk Revit</h5>
                                    <p class="card-text"><small><strike>Rs. 4000</strike></small> Rs. 3000</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/vlsi.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">VLSI</h5>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/python.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h5 class="card-title">Python</h5>
                                    <p class="card-text"><small><strike>Rs. 3200</strike></small> Rs. 2500</p>
                                    <div><a href="#" class="card-link btn btn-primary">View More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="highlights"><h1 style="text-align: center !important;">Our Team</h1><br></div>
    <div class="container-fluid" id="teachers">
        <section id="democ">
            <div class="" style="padding: 0px !important;">
                <div class="large-8 columns">
                    <div class="owl-six owl-carousel owl-theme" style="padding: 0px !important;">
                        <div class="itemx">
                            <div class="team-member text-center" id="ment_c">
                                <div class="team-img">
                                    <img src="images/sonu_singh.png" class="mx-auto d-block rounded-circle" alt="" id="c-img2">
                                    <div class="overlayx">
                                        <div class="team-details text-center">
                                            <p>
                                                Studied from NIT Agartala
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title">Sonu Singh</h6>
                            </div>
                        </div>
                        <div class="itemx">
                            <div class="team-member text-center" id="ment_c">
                                <div class="team-img">
                                    <img src="images/amber_mishra.png" class="mx-auto d-block rounded-circle" alt="" id="c-img2">
                                    <div class="overlayx">
                                        <div class="team-details text-center">
                                            <p>
                                                "5 years teaching experience in CAD & CAE softwares"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title">Amber Mishra</h6>
                            </div>
                        </div>
                        <div class="itemx">
                            <div class="team-member text-center" id="ment_c">
                                <div class="team-img">
                                    <img src="images/aakashnanda.jpeg" class="mx-auto d-block rounded-circle" alt="" id="c-img2">
                                    <div class="overlayx">
                                        <div class="team-details text-center">
                                            <p>
                                                C.V. Raman College of Engineering Bhubaneswar, Odisha
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title">Aakash Kumar Nanda</h6>
                                <span>JAVA and Web Development Trainer</span>
                            </div>
                        </div>
                        <div class="itemx">
                            <div class="team-member text-center" id="ment_c">
                                <div class="team-img">
                                    <img src="images/anil_singh.png" class="mx-auto d-block rounded-circle" alt="" id="c-img2">
                                    <div class="overlayx">
                                        <div class="team-details text-center">
                                            <p>
                                                "6 years Experience in CAD Softwares"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title">Anil Singh</h6>
                                <span>CAD Software Trainer</span>
                            </div>
                        </div>
                        <div class="itemx">
                            <div class="team-member text-center" id="ment_c">
                                <div class="team-img">
                                    <img src="images/sahebsingh.png" class="mx-auto d-block rounded-circle" alt="" id="c-img2">
                                    <div class="overlayx">
                                        <div class="team-details text-center">
                                            <p>
                                                Diploma in  BIG DATA AND HADOOP
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title">Saheb Singh</h6>
                                <span>Big Data Trainer</span>
                            </div>
                        </div>
                        <div class="itemx">
                            <div class="team-member text-center" id="ment_c">
                                <div class="team-img">
                                    <img src="images/bhumishah.jpg" class="mx-auto d-block rounded-circle" alt="" id="c-img2">
                                    <div class="overlayx">
                                        <div class="team-details text-center">
                                            <p>
                                                Studied from IIT indore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title">Bhumi Shah</h6>
                                <span>MATLAB Trainer</span>
                            </div>
                        </div>
                        <div class="itemx">
                            <div class="team-member text-center" id="ment_c">
                                <div class="team-img">
                                    <img src="images/amitkumar.jpg" class="mx-auto d-block rounded-circle" alt="" id="c-img2">
                                    <div class="overlayx">
                                        <div class="team-details text-center">
                                            <p>
                                                Chair Person of Computer Society of India HIT-branch
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title">Amit Kumar</h6>
                                <span>My SQL & Linux Trainer</span>
                            </div>
                        </div>
                        <div class="itemx">
                            <div class="team-member text-center" id="ment_c">
                                <div class="team-img">
                                    <img src="images/sarthakshah.jpg" class="mx-auto d-block rounded-circle" alt="" id="c-img2">
                                    <div class="overlayx">
                                        <div class="team-details text-center">
                                            <p>
                                                Bachelor of Management from IIT Delhi
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title">Sarthak Shah</h6>
                                <span>Digital Marketing Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="highlights"><h1 style="text-align: center !important;">Student's Feedback</h1><br></div>
    <div class="container-fluid" id="review">
        <div class="container">
            <div id="demox" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demox" data-slide-to="0" class="active"></li>
                    <li data-target="#demox" data-slide-to="1"></li>
                    <li data-target="#demox" data-slide-to="2"></li>
                    <li data-target="#demox" data-slide-to="3"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="media border p-3">
                            <img src="images/st_img1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" id="st_img">
                            <div class="media-body">
                                <h4>Gaurav Kr Singh <small><i>NIT Srinagar</i></small></h4>
                                <p id="pip">EngiGyan is the best platform for online software training to provide better and quality training. any remote person can able to access and taught by the best trainer across the India. Just if u have a laptop and internet then you can access from any place, any where and any time</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="media border p-3">
                            <img src="images/st_img2.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" id="st_img">
                            <div class="media-body">
                                <h4 style="text-align: left !important">Amit Kumar <small><i>JECRC Jaipur</i></small></h4>
                                <p id="pip">Yeah EngiGyan guys are doing a great job. I think online training offers safety, flexibility of time and selection of trainer much better than an offline option.Another great site providing onlinetraining is https://www.edx.org/</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="media border p-3">
                            <img src="images/st_img3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" id="st_img">
                            <div class="media-body">
                                <h4>Rahul Kumar</h4>
                                <p id="pip">I have taken courses on edx, Coursera,Udemy & EngiGyan. what i observed difference in engigyan have regional language trainer.Trainers are alwayes ready to help.i most like in engigyan is google classroom in which well maintain study material, projects, lectures.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="media border p-3">
                            <img src="images/st_img4.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" id="st_img">
                            <div class="media-body">
                                <h4>Rajat Kumar</h4>
                                <p id="pip">I have completed my solidworks training program and it was very amazing experience with our trainie we got our doubts cleared time to time and regularly got our homework sheets. It is the best platform for learning Softwares. You can directly talk with the trainer and clear your doubts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<?php //include 'ambassador.php' ?>
    <div class="container-fluid" id="footer">
        <div class="row" id="foot_row">
            <div class="col-lg-3 col-sm-4 col-6">
                <p id="foot_titles">EngiGyan</p>
                <ul style="list-style-type: none;" id="foot_ul">
                    <li><a href="includes/aboutus.php" id="foo">About Us</a></li>
                    <li><a href="" id="foo">News & Media</a></li>
                    <li><a href="includes/contactus.html" id="foo">Contact Us</a></li>
                    <li><a href="http://www.engigyaneducation.blogspot.com/" id="foo">Blog</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
                <p id="foot_titles">WORK WITH US</p>
                <ul style="list-style-type: none;" id="foot_ul">
                    <li><a href="" id="foo">Careers</a></li>
                    <li><a href="" id="foo">Become an Instructor</a></li>
                    <li><a href="" id="foo">Become an Affiliate</a></li>
                    <li><a href="" id="foo">Hire from EngiGyan</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-4 col-lg-3 col-6">
                <p id="foot_titles">USEFUL LINKS</p>
                <ul style="list-style-type: none;" id="foot_ul">
                    <li><a href="" id="foo">Reviews</a></li>
                    <li><a href="" id="foo">Terms & Conditions</a></li>
                    <li><a href="" id="foo">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-4 col-lg-3 col-6">
                <p id="foot_titles">KEEP IN TOUCH</p>
                <ul style="list-style-type: none; overflow: hidden;" id="foot_ul">
                    <li class="ga-fb" style="float: left;"><a href="https://www.facebook.com/engigyan" target="_blank" class="fb" id="foo"><i class="fa fa-facebook-square"></i></a></li>
                    <li class="ga-instagram" style="float: left;"><a href="https://www.instagram.com/engigyan_live_online_training/" target="_blank" class="ins" id="foo"><i class="fa fa-instagram"></i></a></li>
                    <li class="ga-blogger" style="float: left;"><a href="http://www.engigyaneducation.blogspot.com/" target="_blank" class="blog" id="foo"><i class="fa fa-rss"></i></a></li>
                    <li class="ga-linkedin" style="float: left;"><a href="https://www.linkedin.com/in/engigyan/" target="_blank" class="in" id="foo"><i class="fa icon-fa-linkedin fa-linkedin"></i></a></li>
                    <li class="ga-youtube" style="float: left;"><a href="https://www.youtube.com/channel/UC-42kedUbInLAALSaKy7zTg" target="_blank" class="ut" id="foo"><i class="fa icon-fa-youtube fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script src="js/dropdown.js"></script>
<script src="js/timer.js"></script>
<script>
    function mac(){
        if(screen.width<=500){
            document.getElementById("s_img0").src="images/Screenshot23.png";
            document.getElementById("bnb").classList.remove("container");
            document.getElementById("bnb").classList.add("container-fluid");
        }
        else{
            document.getElementById("s_img0").src="images/Screenshot2.png";
        }
    }
    $(document).ready(function() {
        var owl = $('.owl-seven');
        owl.owlCarousel({
        stagePadding: 50,
        margin: 20,
        nav: true,
        loop: false,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 3
            },
            1000: {
            items: 3
            }
        }
        })
    })
    function func(){
        document.getElementById("overlayz").style.display = "flex";
    }
    function closeover(){
        var o=document.getElementById("overlayz");
        o.style.display="none";
        var vid = document.getElementById("video");
        vid.pause();
    }
    $(document).ready(function() {
        var owl = $('.owl-one');
        owl.owlCarousel({
        stagePadding: 50,
        margin: 20,
        nav: true,
        loop: true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 3
            },
            1000: {
            items: 5
            }
        }
        })
    })
    $(document).ready(function() {
        var owl = $('.owl-two');
        owl.owlCarousel({
        stagePadding: 50,
        margin: 20,
        nav: true,
        loop: true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 3
            },
            1000: {
            items: 5
            }
        }
        })
    })
    $(document).ready(function() {
        var owl = $('.owl-three');
        owl.owlCarousel({
        stagePadding: 50,
        margin: 20,
        nav: true,
        loop: true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 3
            },
            1000: {
            items: 5
            }
        }
        })
    })
    $(document).ready(function() {
        var owl = $('.owl-four');
        owl.owlCarousel({
        stagePadding: 50,
        margin: 20,
        nav: true,
        loop: true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 3
            },
            1000: {
            items: 5
            }
        }
        })
    })
    $(document).ready(function() {
        var owl = $('.owl-five');
        owl.owlCarousel({
        stagePadding: 50,
        margin: 20,
        nav: true,
        loop: true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 3
            },
            1000: {
            items: 5
            }
        }
        })
    })
    $(document).ready(function() {
        var owl = $('.owl-six');
        owl.owlCarousel({
        stagePadding: 60,
        margin: -10,
        nav: true,
        loop: true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 2
            },
            1000: {
            items: 5
            }
        }
        })
    })
</script>
</html>