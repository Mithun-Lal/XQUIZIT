<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>XQUIZIT</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
        
        
        
<!--        inserted by jerin jacob-->
        
        
        
        
        
<!--
        
        <style>
        #demo {
  text-align: center;
  font-size: 60px;
}
        </style>
-->
        
        
        
        
        
        
<script>
// Set the date we're counting down to
var countDownDate = <?php
                  session_start();
                  $timer=$_SESSION["timer"];
                  if(!isset($_SESSION["timer"]))
                      echo '0';
                  $user_time=time()-$timer;
                  $current_time=180-$user_time;
                  
                  if($current_time<0)
                  {
                      $url='timeout.html';
                      header('Location:'.$url);
                      // 'wrong '.$current_time;
                  }
                  else
                  {
                      echo $current_time;
                  }
                  
                  ?>*1000;
var now = 0;
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    
    now+=1000;
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        window.open("timeout.html","_self")
    }
}, 1000);
</script>
        
        
        
<!-- insertion end       -->
        
    </head>
    <body>
        <div id="body-bg">
            
           
            <!-- End Top Menu -->
            <div id="post_header" class="container" style="height: 40px">
                <!-- Spacing below header -->
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-40">
                        <!-- Begin Sidebar Menu -->
                        <div class="col-md-3">
                            <ul class="list-group sidebar-nav" id="sidebar-nav">
                                <!-- Typography -->
                             
                                <!-- End Components -->
                                <!-- Icons -->
                                
                                <!-- End Icons -->
                                <!-- Testimonials -->

                                <!-- End Accordion and Tabs -->
                                <!-- Buttons -->
                               
                                <!-- End Buttons -->
                                <!-- Carousels -->
                                
                                
                                
<!--                                timer inserted by jerinjacob-->
                                <li class="list-group-item">
                               <a id="demo"></a> 
                                </li>
<!--                                insertion ends-->
                                
                                
                                
                                
                            </ul>
                        </div>
                        <!-- End Sidebar Menu -->
                        <div class="col-md-9">
                            <h2 class="padding-bottom-10">ROUND-1</h2>
                            <!-- Default Blockquote -->
                            <form action="p3.php" method="POST">
                            <blockquote>
                                <p>
                                    <em>
                                        <?php
                                        session_start();
                                        require 'checksession.php';
                                        
                                        if(!isset($_SESSION["userid1"])) {
                                        $url="http://xquizit.conjura.in/resubmit/message.html";
                                        header('Location:'.$url);
                                        } 
                                        $Servername="localhost";
                                        $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";
                                        
                                        $conn = mysqli_connect($Servername,$Username,$Password,$dbname);
                                        if (!$conn) {
                                         die("Connection failed: " . mysqli_connect_error());
                                            }
                                            else
                                            echo "not";
                                        $que="select * from questions where qno=1";
                                        $result=$conn->query($que);
                                        
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout1.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout1.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                   // echo "</br>"."img src="'http://xquizit.conjura.in/first/HTML/imgout1.jpg'"";
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                               
                                <div class="col-sm-4">
                                <small>
                                <label for="text" >Answer1:</label>
                                </small>
                                    <center><input type="text" class="form-control " name="ans1" id="ans1"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: black">
                                    </center>
                                </div>
                            </blockquote>
                            <!-- End Default Blockquote -->
                            <hr>
                            <!-- Primary Blockquote -->
                            <blockquote class="primary">
                                <p>
                                    <em>
                                        <?php
                                       $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername,$Username,$Password,$dbname);
                                        $que="select * from questions where qno=2";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout2.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout2.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                                 
                                <div class="col-sm-4">
                                <small>
                                <label for="text" >Answer2:</label>
                                </small>
                                    <center><input type="text" class="form-control " name="ans2" id="ans2"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                            


                            </blockquote>
                            <!-- End Primary Blockquote -->
                            <hr>
                            <!-- Primary Right Blockquote -->
                            <blockquote class="primary">
                                <p>
                                    <?php
                                       $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
                                        $que="select * from questions where qno=3";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout3.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout3.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                               <div class="container-fluid">
                                
                                <div class="col-sm-4">
                                <small>
                                <label for="text" >Answer3:</label>
                                </small>
                                    <center><input type="text" class="form-control " name="ans3" id="ans3"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                          
                            </blockquote>
                            <!-- End Primary Right Blockquote -->
                            <hr>
                            <!-- Background Grey Blockquote -->
                            <blockquote class="bg-gray">
                                <p>
                                    <?php
                                       $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
                                        $que="select * from questions where qno=4";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout4.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout5.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                                
                                <div class="col-sm-4">
                                 <small>
                                <label for="text" >Answer4:</label>
                                </small>
                                    <center><input type="text" class="form-control " name="ans4" id="ans4"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                             
                            </blockquote>
                            <!-- End Background Grey Blockquote -->
                            <hr>
                            <!-- Background Grey Primary Blockquote -->
                            <blockquote class="bg-gray primary">
                                <p>
                                    <?php
                                       $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
                                        $que="select * from questions where qno=5";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout5.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout5.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                         
                                <div class="col-sm-4">
                                <label for="text" >Answer5:</label>
                                    <center><input type="text" class="form-control " name="ans5" id="ans5"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                         
                            </blockquote>
                            <!-- End Background Grey Primary Blockquote -->
                            <hr>
                            <!-- Background Primary Blockquote -->
                            <blockquote class="bg-primary">
                               <p>
                                    <?php
                                        $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
                                        $que="select * from questions where qno=6";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout6.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout6.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                       
                                <div class="col-sm-4">
                                <label for="text" >Answer6:</label>
                                    <center><input type="text" class="form-control " name="ans6" id="ans6"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                            </blockquote>
                            <!-- End Background Grey Primary Blockquote -->
                            <hr>
                            <!-- Background Primary Blockquote -->
                            <blockquote class="bg-primary">
                                <p>
                                    <?php
                                        $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
                                        $que="select * from questions where qno=7";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout7.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout7.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                              
                                <div class="col-sm-4">
                                <label for="text" >Answer7:</label>
                                    <center><input type="text" class="form-control " name="ans7" id="ans7"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                            </blockquote>
                            <!-- End Background Primary Blockquote -->
                            <hr>
                            <!-- Background Primary Blockquote -->
                            <blockquote class="bg-primary">
                                <p>
                                    <?php
                                        $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
                                        $que="select * from questions where qno=8";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout8.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout8.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                                
                                <div class="col-sm-4">
                                <label for="text" >Answer8:</label>
                                    <center><input type="text" class="form-control " name="ans8" id="ans8"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                            </blockquote>
                            <blockquote class="bg-primary">
                                <p>
                                   <?php
                                        $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
                                        $que="select * from questions where qno=9";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout9.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout9.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                             
                                <div class="col-sm-4">
                                <label for="text" >Answer9:</label>
                                    <center><input type="text" class="form-control " name="ans9" id="ans9"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                            </blockquote>
                            <blockquote class="bg-primary">
                                <p>
                                    <?php
                                       $Servername="localhost";
                                       $Username="conjupny_quiz";
                                        $Password="quiz@user";
                                        $dbname="conjupny_mydb";

                                        $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
                                        $que="select * from questions where qno=10";
                                        $result=$conn->query($que);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {   
                                                $size=strlen($row["que"]);
                                                if($size>=500)
                                                {
                                                    $base64_string=$row["que"];
                                                    $content=base64_decode($base64_string);
                                                    $output_file="imgout10.jpg";
                                                    $file = fopen($output_file, "wb");
                                                    fwrite($file, $content);
                                                    fclose($file);
                                                    //echo "stringlen=".strlen($base64_string);
                                                    $dir= 'http://xquizit.conjura.in/first/HTML';
                                                    $file='imgout10.jpg';
                                                   echo "</br>".'<img src="', $dir, '/', $file, '" alt="', $file, '" />';
                                                }
                                                else
                                                {
                                                    $x=$row["que"];
                                                     echo($x);
                                                }

                                            }
                                        }
                                        $conn->close();

                                        ?>
                                    </em>
                                </p>
                                <div class="container-fluid">
                            
                                <div class="col-sm-4">
                                <label for="text" >Answer10:</label>
                                    <center><input type="text" class="form-control " name="ans10" id="ans10"
                                    placeholder="enter answer" style="background-color: rgba(0,0,0,0.3); color: white"></center>
                                </div>
                            
                            </blockquote>
                            
                        </div>
                       
                        <div class="buttonHolder" >
                        <center>
                            <button type="submit" class="btn btn-default" style="padding-left: 3em; padding-right: 3em; float: center">
                            Submit</button></center>
                    </div>
                    
                    </div>
                </div>
            </div>
            </form>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container">
            </div>
           
    
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->