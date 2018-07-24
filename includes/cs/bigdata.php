<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='shortcut icon' href='../../images/favicon.ico' type='image/x-icon'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course: Big Data</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/courses.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../preloader/css/loader.css">
    <script src="../../preloader/js/loader.js"></script>
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
        <a class="navbar-brand" href="#"><img class="img-fluid" src="../../images/engigyan.png" alt="" id="logo"> EngiGyan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">
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
                                <li><a class="dropdown-item" href="cpp.php">C++</a></li>
                                <li><a class="dropdown-item" href="java.php">JAVA</a></li>
                                <li><a class="dropdown-item" href="mysql.php">MySQL</a></li>
                                <li><a class="dropdown-item" href="python.php">Python</a></li>
                                <li><a class="dropdown-item" href="linux.php">LINUX</a></li>
                                <li><a class="dropdown-item" href="cloudcomp.php">Cloud Computing</a></li>
                                <li><a class="dropdown-item" href="robotics.php">Robotics</a></li>
                                <li><a class="dropdown-item" href="ai.php">Artificial Intelligence</a></li>
                                <li><a class="dropdown-item" href="bigdata.php">Big Data</a></li>
                                <li><a class="dropdown-item" href="matlab.php">MATLAB</a></li>
                                <li><a class="dropdown-item" href="#">Web Developement</a></li>
                                <li><a class="dropdown-item" href="#">App Developement</a></li>
                                <li><a class="dropdown-item" href="ml.php">Machine Learning</a></li>
                            </ul>
                        </li>
                        <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Mechanical Engineering</a>
                            <ul class="dropdown-menu" id="sub-menu">
                                <li><a class="dropdown-item" href="../mechanical/solidworks.html">SolidWorks</a></li>
                                <li><a class="dropdown-item" href="../mechanical/catia.html">CATIA</a></li>
                                <li><a class="dropdown-item" href="../mechanical/autocad.html">AutoCAD</a></li>
                                <li><a class="dropdown-item" href="../mechanical/ansys.html">ANSIS</a></li>
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
                        <div class="link-nav">AUTO E PREP</div>
                    </a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="../aboutus.php">
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
                    <form action="">
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
    <div class="jumbotron" id="head">
        <div class="row" style="margin-left: 0px !important">
            <div class="col1" id="c_img"><img src="../../images/bigdata.jpg" alt="Big Data" class="img-fluid" id="course_img" style="margin-top: 20px; padding: 10px;"></div>
            <div class="col2" id="c_cont">
                <div class="row"><h1>Big Data: Complete Course</h1></div>
                <div class="row"><h5><b> Big Data: </b> Organizations want people who can handle their data and analyse it to give some reports which will increase their business.</h5></div>
                
            </div>
        
            <div class="col3">
                <div class="row" id="ratings">Ratings: &nbsp;<span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="row"><p>Duration: 2 Months</p></div>
               <?php include 'bigdataChecker.php'; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container" id="what-will-learn">
            <h2>What will you learn?</h2>
            <ul style="list-style-type:none">
                <li id="what-will-learn-content">
                    <span id="tick"><i class="fa fa-check"></i> </span> Understanding Big Data and Hadoop.
                </li>
                <li id="what-will-learn-content">
                    <span id="tick"><i class="fa fa-check"></i> </span> Hadoop Architecture and HDFS.
                </li>
                <li id="what-will-learn-content">
                    <span id="tick"><i class="fa fa-check"></i> </span> Hadoop MapReduce Framework.
                </li>
                <li id="what-will-learn-content">
                    <span id="tick"><i class="fa fa-check"></i> </span> Pig
                </li>
                <li id="what-will-learn-content">
                    <span id="tick"><i class="fa fa-check"></i> </span> Hive.
                </li>
                <div id="accordion">
                    <div class="collap">
                        <div id="toggle-collapse">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne" onclick="myfun()">
                                Read More...
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <li id="what-will-learn-content">
                                <span id="tick"><i class="fa fa-check"></i> </span> HBase
                            </li>
                            <li id="what-will-learn-content">
                                <span id="tick"><i class="fa fa-check"></i> </span> OOZIE
                            </li>
                            <li id="what-will-learn-content">
                                <span id="tick"><i class="fa fa-check"></i> </span> SQOOP
                            </li>
                            <li id="what-will-learn-content">
                                <span id="tick"><i class="fa fa-check"></i> </span> FLUME
                            </li>
                            <li id="what-will-learn-content">
                                <span id="tick"><i class="fa fa-check"></i> </span> Introduction to Apache Spark.
                            </li>
                            <li id="what-will-learn-content">
                                <span id="tick"><i class="fa fa-check"></i> </span> PROJECTS ( AIRLINES ANALYSIS, YOUTUBE DATA ANALYSIS, MOVIE LENS ANALYSIS)
                            </li>
                            <li id="what-will-learn-content">
                                <span id="tick"><i class="fa fa-check"></i> </span> Assignments on the basis of what is thaught in the lectures will be given.
                            </li>
                        </div>
                    </div>
                </div>
            </ul>
            <h3>Includes</h3>
            <ul style="list-style-type: none; color: #565656;">
                <li id="includes-content">
                    <span id="includes-gliphs"><i class="fa fa-terminal"></i></span> Exercises
                </li>
                <li id="includes-content">
                    <span id="includes-gliphs"><i class="fa fa-file-text-o"></i></span> Articles and Notes
                </li>
                <li id="includes-content">
                    <span id="includes-gliphs"><i class="fa fa-book" aria-hidden="true"></i></span> Micro-Projects and Hands on work on data
                </li>
                <li id="includes-content">
                    <span id="includes-gliphs"><i class="fa fa-book"></i></span> Each course is like an interactive textbook, featuring pre-recorded videos, quizzes and projects.
                </li>
                <li id="includes-content">
                    <span id="includes-gliphs"><i class="fa fa-certificate"></i></span> Certificate on Course Completion
                </li>
            </ul>
            <h3>Check Your Proficiency</h3>
            <div id="check">
                <form action="" style="width: 100% !important;">
                    <div class="question">
                        <div class="row">
                            Q1. IF WE HAVE A 4 NODE CLUSTER, HOW MANY NUMBER OF NAMENODES AND DATANODES ARE PRESENT?
                        </div>
                        <div class="">
                            <input type="radio" name="ans" id="">2 DataNodes, 2 NameNodes <br>
                            <input type="radio" name="ans" id="">3 DataNodes, 1 NameNode
                        </div>
                    </div>
                    <div class="question">
                        <div class="row">
                             Q2. Which tool could be used to move data from RDBMS data to HDFS?
                        </div>
                        <div class="">
                            <input type="radio" name="ans" id="">Flume <br>
                            <input type="radio" name="ans" id="">Sqoop
                        </div>
                    </div>
                    <div class="question">
                        <div class="row">
                            Q3. Which of these provides a Stream processing system used in Hadoop ecosystem?
                        </div>
                        <div class="">
                            <input type="radio" name="ans" id="">Spark <br>
                            <input type="radio" name="ans" id="">Solr
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="collap">
                            <div id="toggle-collapse">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    View More...
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="question">
                                    <div class="row">
                                        Q4. For the frequently accessed HDFS files the blocks are cached in-
                                    </div>
                                    <div class="">
                                        <input type="radio" name="ans" id="">the memory of the datanode <br>
                                        <input type="radio" name="ans" id="">in the memory of the namenode
                                    </div>
                                </div>
                                <div class="question">
                                    <div class="row">
                                        Q5. Clients connect to ________ for I/O 
                                    </div>
                                    <div class="">
                                        <input type="radio" name="ans" id="">NameNode <br>
                                        <input type="radio" name="ans" id="">DataNode
                                    </div>
                                </div>
                                <div class="question">
                                    <div class="row">
                                        Q6. Is it mandatory to set input and output type/format in MapReduce?
                                    </div>
                                    <div class="">
                                        <input type="radio" name="ans" id="">Yes <br>
                                        <input type="radio" name="ans" id="">No
                                    </div>
                                </div>
                                <div class="question">
                                    <div class="row">
                                        Q7. Which of the following permits to use multiple Mapper classes within a single Map task
                                    </div>
                                    <div class="">
                                        <input type="radio" name="ans" id="">Identity Mapper <br>
                                        <input type="radio" name="ans" id="">Chain Mapper
                                    </div>
                                </div>
                                <div class="question">
                                    <div class="row">
                                        Q8. What are the default block size in Hadoop 1.x and Hadoop 2.x?
                                    </div>
                                    <div class="">
                                        <textarea name="" id="" cols="100" rows="3" style="max-width: 100%; max-height: 10%;"></textarea>
                                    </div>
                                </div>
                                <div class="question">
                                    <div class="row">
                                        Q9. HDFS provides a command line interface called __________ used to interact with HDFS.
                                    </div>
                                    <div class="">
                                        <textarea name="" id="" cols="100" rows="3" style="max-width: 100%; max-height: 10%;"></textarea>
                                    </div>
                                </div>
                                <div class="question">
                                    <div class="row">
                                        Q10. In which mode each daemon runs on a single node as a single java process?
                                    </div>
                                    <div class="">
                                        <textarea name="" id="" cols="100" rows="3" style="max-width: 100%; max-height: 10%;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="sub-button"><button class="btn btn-success">Submit Answers</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="requirements">
        <div class="container">
            <h2>Requirements</h2>
            <ul id="requirements-ul">
                <li>
                    A computer with either Windows, Mac or Linux to install all the free software and tools needed to build new apps (Specific apps will be provided in initial videos).
                </li>
                <li>
                    A strong work ethic, willingness to learn, dedication and plenty of excitement about the awesome new programs you’re about to build
                </li>
                <li>
                    Having basic knowledge of Web & Internet.
                </li>
            </ul>
        </div>
    </div>
<div class="container" id="certificate">
        <center><h2 style="padding: 10px;">Certificate</h2></center>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <ul style="font-size: 18px; color: rgba(0, 0, 0, 0.65) !important;">
                        <li>
                            <span style="color: blue;"><i class="fa fa-address-card-o" aria-hidden="true"> </i></span> <strong> Official & Verified</strong>
                            <p>Receive an instructor-signed certificate with the institution's logo to verify your achievement</p>
                        </li>
                        <li>
                            <span style="color: blue;"><i class="fa fa-envelope" aria-hidden="true"></i> </span> <strong> Easily Sharabe</strong>
                            <p>Add the certificate to your CV or resume, or post it directly on LinkedIn</p>
                        </li>
                        <li>
                            <span style="color: blue;"><i class="fa fa-trophy" aria-hidden="true"></i> </span> <strong> Proven Motivator</strong>
                            <p>Give yourself an additional incentive to complete the course</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12" style="justify-content: center !important; align-items: center !important;">
                    <img src="../../images/certificate.PNG" alt="" class="mx-auto d-block" id="certificate-img">
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="video-cont">
        <div style="padding: 10px;"><center><h2>Video Lectures</h2></center></div>
        <div class="row">
            <div class="media border p-3" id="video-box">
                <div class="v_img">
                    <div class="v_img2">
                        <div class="ayz">
                            <center><h2><a id="play_button" onclick="func1()"><i class="fa fa-play" aria-hidden="true"></i></a></h2></center>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <h4>Video : 1<br> <small><i>Starting with JAVA</i></small></h4>
                    <p>Introduction to what is JAVA, its applications, history etc.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="media border p-3" id="video-box">
                <div class="v_img">
                    <div class="v_img2">
                        <div class="ayz">
                            <center><h2><a id="play_button" onclick="func2()"><i class="fa fa-play" aria-hidden="true"></i></a></h2></center>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <h4>Video : 1<br> <small><i>Starting with JAVA</i></small></h4>
                    <p>Introduction to what is JAVA, its applications, history etc.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="media border p-3" id="video-box">
                <div class="v_img">
                    <div class="v_img2">
                        <div class="ayz">
                            <center><h2><a id="play_button" onclick="func4()"><i class="fa fa-play" aria-hidden="true"></i></a></h2></center>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <h4>Video : 1<br> <small><i>Starting with JAVA</i></small></h4>
                    <p>Introduction to what is JAVA, its applications, history etc.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="media border p-3" id="video-box">
                <div class="v_img">
                    <div class="v_img2">
                        <div class="ayz">
                            <center><h2><a id="play_button" onclick="func4()"><i class="fa fa-play" aria-hidden="true"></i></a></h2></center>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <h4>Video : 1<br> <small><i>Starting with JAVA</i></small></h4>
                    <p>Introduction to what is JAVA, its applications, history etc.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <a style="text-decoration: underline; color: blue; font-size: 20px; cursor: pointer;" data-toggle="modal" data-target="#login">View More...</a>
    </div>
    <div class="overlay" id="overlay">
        <span class="btnclose" onclick="closeover()">&times;</span>
        <div class="overlaycontainer">
            <video id="video" controls>
                    <source src="../../videos/ENGIGYAN 'Big Data' class 02.mp4" type="video/mp4">
                    Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <br><br>
    <?php include'footer.php'?>
</body>
<script src="../../js/dropdown.js"></script>
<script>
    function func1(){
        document.getElementById("overlay").style.display = "flex";
    }
    function closeover(){
        var o=document.getElementById("overlay");
        o.style.display="none";
        var vid = document.getElementById("video");
        vid.pause();
    }
    function myfun(){
        document.getElementById("toggle-collapse").style.display="none";
    }
</script>
</html>