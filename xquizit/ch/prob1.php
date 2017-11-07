<?php
session_start();
require 'checksession.php';
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
        $url1="http://xquizit.conjura.in/";//to redirect multi login users
        header('Location:'.$url1);
    }
?>