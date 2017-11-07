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
             <option value="http://xquizit.conjura.in/"  selected>Home</option> 
         
   </select> 
           </label> 
          </label>
        
          </div>
                            </div>
                        </div>
                        
                        <div class="featured-heading">
                            <div class="row-fluid">
                                <div class="span10 offset1">
                                    <h1>ONLINE QUIZ COMPETITION OF CONJURA '17</h1>

<h1>RULES</h1>
                                     <h2 style="text-align:justify;">
                                      1.ANSWER TO BE SUBMITTED IN SMALL LETTERS.NO SPACE BETWEEN LETTERS<BR>
2.NO ACRONYMS<BR>
3.MAKE SURE TO GIVE THE CORRECT SPELLING.OTHERWISE YOUR ANSWER WOULD BE NOTED AS WRONG.<BR>

<font color=#4faf50>4.PLEASE PRESS THE SUBMIT BUTTON BEFORE THE END OF YOUR 3 MIN TIME.OTHERWISE YOUR ANSWERS WONT BE REGISTERED.</font><BR>
5.YOU HAVE ONLY 3 MINUTES.USE IT WISELY!

                                      

 </div>
       </div>
       </div>
                      
                        
                      
 <div class="banner-shadow">
                        <div class="banner">
                            <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                <div class="carousel-inner">
                             
                                        
                                        <div class="carousel-caption">
                                          
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                                 
      

  
  <script>

  // This is called with the results from from FB.getLoginStatus().
 function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = '';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '387068504982576',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      //document.getElementById('status').innerHTML =
        //'Thanks for logging in, ' + response.name + '!';
                //alert($(this).attr('id'));
        var id1=response.id;
        var name=response.name;

        window.top.location.href ="/ch/checkfirst1.php?q="+id1+"&usr="+name;

    
    
    });
  }

 
</script>
<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->
<div>
</br>
<center> 

                                  

                                     

 
<fb:login-button scope="public_profile,email"  onlogin="testAPI();" data-max-rows="1" data-size="xlarge" data-show-faces="false" style="color:black;"">
Login With Facebook
</fb:login-button>

</div>
<?php
session_start();
require '/ch/checksession.php';
?>
<div id="status">
</div>

            
   
    

    </body>
</html>
