<?php
session_start();
$_SESSION["timer"]=time();
$colg1=$_POST["colgname"];
$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";

 $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
function cleanup ($str1,$conn)
	{
		$str1=mysqli_real_escape_string($conn,$str1);
		$str1=strip_tags($str1);
		$str1=addslashes($str1);
		return $str1;
	}
	$colg=cleanup($colg1,$conn);
	$_SESSION["college"]=$colg1;
	//$sqlins="insert into usrtime values('".$_SESSION["userid1"]."','".$_SESSION["timer"]."')";
	//$conn->query($sqlins);
$url="/ch/HTML/p2.php";
header('Location:'.$url);
?>