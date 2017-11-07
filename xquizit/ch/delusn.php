<?php
$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";

 $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
else
echo "Connected successfully";
$sql="delete from usn where username='Karthik TN'";
if($conn->query($sql)==TRUE)
{
echo "deleted";
}
$conn->close();
?>