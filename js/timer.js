// Update the count down every 1 second
var x = setInterval(function() {
    var d=new Date();
    var hrs=d.getHours();
    var mins=d.getMinutes();
    var hx;
    var hx1;
    var hx2;
    if(hrs>=1 && hrs<=9){
        hx="Sep 5, 2040 09:00:00";
        hx1="Sep 5, 2040 10:00:00";
        hx2="Sep 5, 2040 11:00:00";
        document.getElementById("upcour").innerHTML = "Linux";
        document.getElementById("c-imgx1").src = "images/linux.png";
        document.getElementById("upcour1").innerHTML = "MySQL";
        document.getElementById("c-imgx2").src = "images/mysql.png";
        document.getElementById("upcour2").innerHTML = "JAVA";
        document.getElementById("c-imgx3").src = "images/java.png";
    }
    else if(hrs>9 && hrs<=10){
        hx="Sep 5, 2040 10:00:00";
        hx1="Sep 5, 2040 11:00:00";
        hx2="Sep 5, 2040 12:00:00";
        document.getElementById("upcour").innerHTML = "MySQL";
        document.getElementById("c-imgx1").src = "images/mysql.png";
        document.getElementById("upcour1").innerHTML = "JAVA";
        document.getElementById("c-imgx2").src = "images/java.jpg";
        document.getElementById("upcour2").innerHTML = "Digital Marketing";
        document.getElementById("c-imgx3").src = "images/digimarket.jpg";
    }
    else if(hrs>10 && hrs<=11){
        hx="Sep 5, 2040 11:00:00";
        hx1="Sep 5, 2040 12:00:00";
        hx2="Sep 5, 2040 13:00:00";
        document.getElementById("upcour").innerHTML = "JAVA";
        document.getElementById("c-imgx1").src = "images/java.png";
        document.getElementById("upcour1").innerHTML = "Digital Marketing";
        document.getElementById("c-imgx2").src = "images/digimarket.jpg";
        document.getElementById("upcour2").innerHTML = "Robotics"
        document.getElementById("c-imgx3").src = "images/robotics.jpg";
    }
    else if(hrs>11 && hrs<=12){
        hx="Sep 5, 2040 12:00:00";
        hx1="Sep 5, 2040 13:00:00";
        document.getElementById("upcour").innerHTML = "Digital Marketing";
        document.getElementById("c-imgx1").src = "images/digimarket.jpg";
        document.getElementById("upcour1").innerHTML = "Robotics";
        document.getElementById("c-imgx2").src = "images/robotics.jpg";
        document.getElementById("cit").classList.remove("carousel-item");
        document.getElementById("cit").style.display="none";
    }
    else if(hrs>12 && hrs<=13){
        hx="Sep 5, 2040 13:00:00";
        document.getElementById("upcour").innerHTML = "Robotics";
        document.getElementById("c-imgx1").src = "images/robotics.jpg";
        document.getElementById("cit").classList.remove("carousel-item");
        document.getElementById("cit").style.display="none";
        document.getElementById("cit1").classList.remove("carousel-item");
        document.getElementById("cit1").style.display="none";
    }
    else if(hrs>13 && hrs<=17){
        hx="Sep 5, 2040 17:00:00";
        hx1="Sep 5, 2040 18:00:00";
        hx2="Sep 5, 2040 19:00:00";
        document.getElementById("upcour").innerHTML = "A.I";
        document.getElementById("c-imgx1").src = "images/aijpg";
        document.getElementById("upcour1").innerHTML = "C++";
        document.getElementById("c-imgx2").src = "images/cpp.jpg";
        document.getElementById("upcour2").innerHTML = "AutoCAD";
        document.getElementById("c-imgx3").src = "images/autocad.png";
    }
    else if(hrs>17 && hrs<=18){
        hx="Sep 5, 2040 18:00:00";
        hx1="Sep 5, 2040 19:00:00";
        hx2="Sep 5, 2040 20:00:00";
        document.getElementById("upcour").innerHTML = "C++";
        document.getElementById("c-imgx1").src = "images/cpp.png";
        document.getElementById("upcour1").innerHTML = "AutoCAD";
        document.getElementById("c-imgx2").src = "images/autocad.png";
        document.getElementById("upcour2").innerHTML = "ANSYS";
        document.getElementById("c-imgx3").src = "images/ansis.png";
    }
    else if(hrs>18 && hrs<=19){
        hx="Sep 5, 2040 19:00:00";
        hx1="Sep 5, 2040 20:00:00";
        hx2="Sep 5, 2040 21:00:00";
        document.getElementById("upcour").innerHTML = "AutoCAD";
        document.getElementById("c-imgx1").src = "images/autocad.png";
        document.getElementById("upcour1").innerHTML = "ANSYS";
        document.getElementById("c-imgx2").src = "images/ansis.png";
        document.getElementById("upcour2").innerHTML = "Web Development";
        document.getElementById("c-imgx3").src = "images/webdev.jpg";
    }
    else if(hrs>19 && hrs<=20){
        hx="Sep 5, 2040 20:00:00";
        hx1="Sep 5, 2040 21:00:00";
        hx2="Sep 5, 2040 22:00:00";
        document.getElementById("upcour").innerHTML = "ANSYS";
        document.getElementById("c-imgx1").src = "images/ansis.png";
        document.getElementById("upcour1").innerHTML = "Web Development";
        document.getElementById("c-imgx2").src = "images/webdev.png";
        document.getElementById("upcour2").innerHTML = "App Development";
        document.getElementById("c-imgx3").src = "images/appdev.png";
    }
    else if(hrs>20 && hrs<=21){
        hx="Sep 5, 2040 21:00:00";
        hx1="Sep 5, 2040 22:00:00";
        hx2="Sep 5, 2040 23:00:00";
        document.getElementById("upcour").innerHTML = "Web Development";
        document.getElementById("c-imgx1").src = "images/webdev.jpg";
        document.getElementById("upcour1").innerHTML = "App Development";
        document.getElementById("c-imgx2").src = "images/appdev.png";
        document.getElementById("upcour2").innerHTML = "Machine Learning";
        document.getElementById("c-imgx3").src = "images/ml.jpg";
    }
    else if(hrs>21 && hrs<=22){
        hx="Sep 5, 2040 22:00:00";
        hx1="Sep 5, 2040 23:00:00";
        document.getElementById("upcour").innerHTML = "App Development";
        document.getElementById("c-imgx1").src = "images/appdev.png";
        document.getElementById("upcour1").innerHTML = "Machine Learning";
        document.getElementById("c-imgx2").src = "images/ml.jpg";
        document.getElementById("cit").classList.remove("carousel-item");
        document.getElementById("cit").style.display="none";
    }
    else if(hrs>22 && hrs<=23){
        hx="Sep 5, 2040 23:00:00";
        document.getElementById("upcour").innerHTML = "Machine Learning";
        document.getElementById("c-imgx1").src = "images/ml.jpg";
        document.getElementById("cit").classList.remove("carousel-item");
        document.getElementById("cit").style.display="none";
        document.getElementById("cit1").classList.remove("carousel-item");
        document.getElementById("cit1").style.display="none";
    }
    else if(hrs>23 || hrs==0){
        hx=d.getTime();
        document.getElementById("upcour").innerHTML = "Nothing For now! Please come tommorrow!!";
        document.getElementById("timer").style.display="none";
        document.getElementById("c-imgx1").src = "images/ansis.png";
        document.getElementById("cit").classList.remove("carousel-item");
        document.getElementById("cit").style.display="none";
        document.getElementById("cit1").classList.remove("carousel-item");
        document.getElementById("cit1").style.display="none";
    }
    var countDownDate = new Date(hx).getTime();
    var countDownDate1 = new Date(hx1).getTime();
    var countDownDate2 = new Date(hx2).getTime();
    // Get todays date and time
    var now = new Date().getTime();
    // Find the distance between now an the count down date
    var distance = Number(countDownDate) - now;
    var distance1 = Number(countDownDate1) - now;
    var distance2 = Number(countDownDate2) - now;
    // Time calculations for days, hours, minutes and seconds
    //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

    var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    if(distance!=0 && hours<10 && hrs<23 && hrs!=0){
        document.getElementById("timer").innerHTML = hours + "h "
        + minutes + "m " + seconds + "s ";
    }
    document.getElementById("timer1").innerHTML = hours1 + "h "
    + minutes1 + "m " + seconds1 + "s ";
    document.getElementById("timer2").innerHTML = hours2 + "h "
    + minutes2 + "m " + seconds2 + "s ";
    
    
    // If the count down is over, write some text 
    if (hours==0 && minutes==0 && seconds==0) {
        document.getElementById("timer").innerHTML = "Lecture Started! Go Now";
    }
}, 1000);