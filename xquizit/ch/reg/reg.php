<?php 
session_start();
 if(isset($_SESSION["timer"])) {
                                        $url="http://xquizit.conjura.in/resubmit/message.html";
                                        header('Location:'.$url);
                                        }  ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        
        <link rel="stylesheet" href="css/custom-styles.css">
        
		<link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">
		
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
            <div class="container">

                <div class="row-fluid">
                
                    <div class="span8 offset2">
                        <div class="site-header">
                            <div class="logo">
                                <h1>XQUIZIT</h1>
                            </div>
                            <div class="menu">
                                <div class="navbar">
                                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="fw-icon-th-list"></i>
                                    </a>
                                    <div class="nav-collapse collapse">
                                        <ul class="nav">
                                          <li class="active"><a href="http://xquizit.conjura.in/">Home</a></li>
                                        
                                       
                                        </ul>
                                    </div><!--/.nav-collapse -->
                                </div>
                                <div class="mini-menu">
   <label> 
           <select class="selectnav" onChange="window.location.href=this.value"> 
             <!-- <option value="http://xquizit.conjura.in/"  selected>Home</option>  -->
         
   </select> 
           </label> 


        
          </div>
                            </div>
                        </div>
                        <div class="banner-shadow">
                        <div class="banner">
                            <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <!-- <img src="img/banner-image.jpg" alt="" > -->
                                        <div class="carousel-caption">
                                          <div class="social-icons">
                                            <ul>
                                                <li><a href="#"><i class="fw-icon-facebook icon"></i></a></li>
                                                <li><a href="#"><i class="fw-icon-twitter icon"></i></a></li>
                                                <li><a href="#"><i class="fw-icon-linkedin icon"></i></a></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- <div class="featured-heading"> -->
                            <!-- <div class="row-fluid"> -->
                                <!-- <div class="span10 offset1"> -->
                                    <!-- <h1>XQUIZIT</h1> -->
                                    


                                   
                                    
                                <!-- </div> -->
                            <!-- </div> -->
                        <!-- </div> -->
                      
                        
                        <div class="contact-info">
                            <h1>Register</h1>
                            <h2>The quiz is open.If you are a college student specify your college name.Else specify it as open</h2>

                           
                              <form method="post" action="/ch/checkreg.php"><?php
session_start();
require 'checksession.php';
       if(isset($_SESSION["timer"])) {
                                        $url="http://xquizit.conjura.in/resubmit/message.html";
                                        header('Location:'.$url);
                                        }                                 
$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";
$conn = mysqli_connect($Servername, $Username, $Password,$dbname);
$flaguser=0;
$getuserfromquiztable="select * from quiztable";
$result=$conn->query($getuserfromquiztable);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        if($row["userid"]==$_SESSION["userid1"])
            $flaguser=1;
    }
}
if($flaguser==1)
    {
        $url1="http://xquizit.conjura.in/resubmit/message.html";//to redirect 2nd login to this page
        header('Location:'.$url1);
    }
?>
                                  <div class="controls">
                                      <input id="name" name="name" type="text" class="span5" placeholder="Name">
                                       <input id="colgname" name="colgname" type="text" class="span5" placeholder="College Name">                                       
                                  </div>
                               
                                  
                                  <div class="controls">
                                      <button id="contact-submit" type="submit" class="btn">START QUIZ</button>
                                  </div>


                              </form>
                            
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>



       <script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>

    </body>
</html>
