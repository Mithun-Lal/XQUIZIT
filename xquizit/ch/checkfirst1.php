<?php
session_start();
    $uid = $_GET["q"];
    $usrname=$_GET["usr"];
    echo "userid1=".$uid.'</br>';
    echo "username=".$usrname.'</br>';
    // Do whatever you want with the $uid
    $_SESSION["userid1"]=$uid;
    $_SESSION["username1"]=$usrname;
$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";
$conn = mysqli_connect($Servername, $Username, $Password,$dbname);
$flaguser=0;
$getuserfromquiztable="select userid from usn";
$result=$conn->query($getuserfromquiztable);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        if($row["userid"]==$_SESSION["userid1"])
            $flaguser=1;
    }
}
if($flaguser==0||$result->num_rows==0)
    {
       $url="/ch/test1.php";
        header('Location:'.$url);//1st user
    }
    else
    {
         $url1="http://xquizit.conjura.in/resubmit/message.html";//to redirect multi login users
        header('Location:'.$url1);
    	
    }
?>