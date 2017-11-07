<?php
$b="what to do?";
$sqlins="insert into questions values(1,'".$b."','answer')";
$sqldel="delete from quiztable";
$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";
$conn = mysqli_connect($Servername, $Username, $Password,$dbname);
if($conn->query($sqlins)==TRUE)
echo "inserted";
else
echo "error".$conn->error;
$conn->close();
?>