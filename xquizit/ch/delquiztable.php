<?php
$sqldel="delete from quiztable where username='Karthik TN'";
$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";
$conn = mysqli_connect($Servername, $Username,$Password,$dbname);
if($conn->query($sqldel)==TRUE)
echo "deleted";
else
echo "error".$conn->error;
$conn->close();
?>