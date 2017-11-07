<?php

$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";

 $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
echo "Connected successfully";
$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];
//echo "</br>".$info['mday'].":".$info['mon'].":".$info['year'];
//echo "</br>".$info['hours'].":".$info['minutes'].":".$info['seconds'];
$info['hours']+=5;
$info['hours']-=12;
$info['minutes']+=30;
$reqtime=$info['hours'].':'.$info['minutes'].':'.$info['seconds'];
//echo "</br>".$info['hours'].":".$info['minutes'].":".$info['seconds'];
echo "</br>";
echo($reqtime);
	//$db="CREATE DATABASE mydb";
	$getans="select * from quiztable";
	$result=$conn->query($getans);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "</br>userid=".$row["userid"];
		}
	}
	
	

?>