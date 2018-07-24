<!DOCTYPE html>
<html>
<head>
    <link rel='shortcut icon' href='../images/favicon.ico' type='image/x-icon'>
    <title>Industrial Projects@EngiGyan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/styleservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../preloader/css/loader.css">
    <script src="../preloader/js/loader.js"></script>
</head>
<body>
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
    <a class="navbar-brand" href="#"><img class="img-fluid" src="images/engigyan.png" alt="" id="logo"> EngiGyan</a>
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
                            <li><a class="dropdown-item" href="cs/cpp.php">C++</a></li>
                            <li><a class="dropdown-item" href="cs/java.php">JAVA</a></li>
                            <li><a class="dropdown-item" href="cs/mysql.php">MySQL</a></li>
                            <li><a class="dropdown-item" href="cs/python.php">Python</a></li>
                            <li><a class="dropdown-item" href="cs/linux.php">LINUX</a></li>
                            <li><a class="dropdown-item" href="cs/cloudcomp.php">Cloud Computing</a></li>
                            <li><a class="dropdown-item" href="cs/robotics.php">Robotics</a></li>
                            <li><a class="dropdown-item" href="cs/ai.php">Artificial Intelligence</a></li>
                            <li><a class="dropdown-item" href="cs/bigdata.php">Big Data</a></li>
                            <li><a class="dropdown-item" href="cs/matlab.php">MATLAB</a></li>
                            <li><a class="dropdown-item" href="#">Web Developement</a></li>
                            <li><a class="dropdown-item" href="#">App Developement</a></li>
                            <li><a class="dropdown-item" href="cs/ml.php">Machine Learning</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Mechanical Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="mechanical/solidworks.php">SolidWorks</a></li>
                            <li><a class="dropdown-item" href="mechanical/catia.php">CATIA</a></li>
                            <li><a class="dropdown-item" href="mechanical/autocad.php">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="mechanical/ansys.php">ANSIS</a></li>
                            <li><a class="dropdown-item" href="#">CDF Analysis</a></li>
                            <li><a class="dropdown-item" href="#">Hyper Works</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Civil Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="#">AutoCAD</a></li>
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
                    <div class="link-nav">Auto E PREP</div>
                </a>
            </li>   
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">
                    <div class="link-nav">ABOUT US</div>
                </a>
            </li> 
        </ul>
        <?php include'navbarCheck.php'?>
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
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder="ex:abc@example.com">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Password">
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
                    <form action="/action_page.php">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name Here">
                            </div>
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder="ex:abc@example.com">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Repeat Password:</label>
                            <input type="password" class="form-control" id="pwd2" placeholder="Repeat Password">
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
    <div class="jumbotron" id="abcde">
            <p id="contents">Industrial projects helps students to get hands-on practice and enhances their Technical skills
                Join engineers in professional product design challenges. Show your skills and win prizes.
            </p>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row" style="justify-content: center; padding: 15px;">
                <h2>Select a Branch</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="service-box">
                        <div class="service-icon yellow">
                            <div class="front-content">
                                <!-- <i class="fa fa-trophy"></i>-->
                                <img src="../images/mechanical.jpg" style="width:100px; height:100px">
                                <h3>MECHANICAL ENGINEERING</h3>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>MECHANICAL ENGINEERING</h3>
                            <p id="qwert">Get some projects related to Mechanical Engineering</p>
                            <br> <br> <br> 
                            <a href="mechanical/mech_projects.php"><button> Get Now </button></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="service-box">
                        <div class="service-icon yellow">
                            <div class="front-content">
                                <!-- <i class="fa fa-trophy"></i>-->
                                <img src="../images/computer.png" style="width:100px; height:100px">
                                <h3>COMPUTER SCIENCE</h3>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>COMPUTER SCIENCE</h3>
                            <p id="qwert">Get some coding Projects</p>
                            <br> <br> <br> 
                            <a href="cs/cs_projects.html"><button> Get Now </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="service-box">
                        <div class="service-icon yellow">
                            <div class="front-content">
                                <!-- <i class="fa fa-trophy"></i>-->
                                <img src="../images/civil.jpg" style="width:100px; height:100px">
                                <h3>CIVIL ENGINEERING</h3>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>CIVIL ENGINEERING</h3>
                            <p id="qwert">Get some CAD projects</p>
                            <br> <br> <br> 
                            <a href="civil/civil_projects.php"><button> Get Now </button></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="service-box">
                        <div class="service-icon yellow">
                            <div class="front-content">
                                <!-- <i class="fa fa-trophy"></i>-->
                                <img src="../images/electrical.jpg" style="width:100px; height:100px">
                                <h3>ELECTRICAL ENGINEERING</h3>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>ELECTRICAL ENGINEERING</h3>
                            <p id="qwert">Get some projects of Electrical Engineering</p>
                            <br> <br> <br> 
                            <a href="electrical/ele_projects.php"><button> Get Now </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br>
    <?php include'footer.php'?>

</body>
<script src="../js/dropdown.js"></script>
</html>
