<?php
$sqlins="update questions set ans='blackwidowers' where qno=3";
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