<!DOCTYPE html>
<html>
<head>
    <link rel='shortcut icon' href='../images/favicon.ico' type='image/x-icon'>
    <title>About Us|Engigyan.com|Live Training</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../preloader/css/loader.css">
    <script src="../preloader/js/loader.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
      <a class="navbar-brand" href="#"><img class="img-fluid" src="images/engigyan.png" alt="" id="logo"> EngiGyan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="../index.php">
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
                                <li><a class="dropdown-item" href="cs/cpp.html">C++</a></li>
                                <li><a class="dropdown-item" href="cs/java.html">JAVA</a></li>
                                <li><a class="dropdown-item" href="cs/mysql.html">MySQL</a></li>
                                <li><a class="dropdown-item" href="cs/python.html">Python</a></li>
                                <li><a class="dropdown-item" href="cs/linux.html">LINUX</a></li>
                                <li><a class="dropdown-item" href="cs/ai.html">Artificial Intelligence</a></li>
                                <li><a class="dropdown-item" href="cs/bigdata.html">Big Data</a></li>
                                <li><a class="dropdown-item" href="#">Web Developement</a></li>
                                <li><a class="dropdown-item" href="#">App Developement</a></li>
                                <li><a class="dropdown-item" href="#">Machine Learning</a></li>
                          </ul>
                      </li>
                      <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Mechanical Engineering</a>
                          <ul class="dropdown-menu" id="sub-menu">
                              <li><a class="dropdown-item" href="#">SolidWorks</a></li>
                              <li><a class="dropdown-item" href="#">CATIA</a></li>
                              <li><a class="dropdown-item" href="#">AutoCAD</a></li>
                              <li><a class="dropdown-item" href="#">ANSIS</a></li>
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
                              <li><a class="dropdown-item" href="#">MATLAB</a></li>
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
                      <div class="link-nav">SERVICES</div>
                  </a>
              </li>   
              <li class="nav-item">
                  <a class="nav-link" href="#">
                      <div class="link-nav">ABOUT US</div>
                  </a>
              </li> 
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item" id="spc">
                  <a class="nav-link" href="#">
                      <div class="link-nav">Auto E PREP</div>
                  </a>
              </li>
              <li class="nav-item" id="spc1">
                  <a class="nav-link" href="#">
                      <div class="link-nav" data-toggle="modal" data-target="#login">Log In</div>
                  </a>
              </li>
              <li class="nav-item" id="spc2">
                  <a class="nav-link" href="#">
                      <div class="link-nav" data-toggle="modal" data-target="#register">Register</div>
                  </a>
              </li>
          </ul>
      </div>  
    </nav>
    
<div style="margin-top: 50px;margin-bottom:20px" class="w3-container"><center>
   <br><br>
   
  <div class="w3-card-4" style="width:50%;">
    <header class="w3-panel w3-round-small w3-blue">
      <h2>About Us</h2>
      <p>Online Training</p>
    </header>

    <div class="w3-panel w3-round-small w3-white">
      <p>The Company  "EngiGyan"  stand for Engi-Engineering & Gyan-Knowledge. EngiGyan stands to be a dynamic Virtual training organization offering ISO Certified Courses in SolidWorks,Catia, Analysis, Simulation and Optimization techniques.

     Leading the CAE Training Industry in the country through the vastly spread out network of virtual training institutes, EngiGyan has made a significant impact through training, sponsoring and guiding many Bachelors and Masters, projects and theses. <br></p>
     <h2>Key Features on EngiGyan Virtual Software Training :- </h2>
     <p>1.   Learn and Work from Anywhere any time. <br>

     2.   Live/Virtual sessions will be provided to all the registered student. <br>

     3.   One to One Doubt clearing session every week. <br>

     4.   Mini Projects. <br>

     5.   Industrial project. <br>

     6.   EngiGyan Google Classroom will be provided for assignment, project & study material to all registered candidates.
      <br></p>
      <h2>  EngiGyan  Certification Rules</h2>
      <p>

     1. The assessment will be done on the basis of an online test and Project Evaluation at the end of the course. <br>

     2. Weightage of Project Evaluation is 30% and that of Online test is 60%. Minimum pass percentage for online test is 60. <br>

     3. On completion of the Assessment (Project + Test) with a minimum of 60% marks, EngiGyan will issue a certificate of successful completion . <br>

     4. Four re-attempts will be provided to clear online test in case the candidate scores less than 60%. <br>

     5. A Participation certificate will be issued if the candidate does not score 60% in the Assessment. <br>

     6. Soft copy of the certification will be issued to the participants, on completion of the course. <br>

     </p>
    </div>

    <footer  class="w3-panel w3-round-small  w3-blue">
      <h5>EngiGyan is leading best Live online Software training  in India.</h5>
    </footer>
  </div>

  </center>
</div>
<div class="container-fluid" id="footer">
    <div class="">
        <div class="">
            <h2>EngiGyan</h2>
            <p>EngiGyan is leading best Live online Software training in India.</p>
        </div>
        <div class="">
            Follow <br>
            <a href="https://www.facebook.com/engigyan"><i class="fa fa-facebook-square" style="font-size:24px; color: whitesmoke"></i></a> &nbsp;
            <a href="https://www.linkedin.com/in/engigyan/"> <i class="fa fa-linkedin" style="font-size:24px; color: whitesmoke"></i> </a> &nbsp;
            <a href="http://"> <i class="fa fa-youtube-play" style="font-size:24px; color: whitesmoke"></i> </a>
        </div>
    </div>
    <div class="">
        <div class="">
            <h2>Contact Us</h2>
            <p>Cabin F-2, SMVDU-TBIC <br> Katra, J&K, (182320)</p>
        </div>
        <div class="">
            mail id: <a href="mailto:info@engigyan.com" id="foo">info@engigyan.com </a> <br>
            Contact Us: (+919596098157, +919149604575)
        </div>
    </div>
</div>

</body>
<script src="../js/dropdown.js"></script>
</html>
