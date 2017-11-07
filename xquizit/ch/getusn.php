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
$sql="select * from usn";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		
		echo "</br>qno=".$row["userid"]."</br>";
		echo "question=".$row["username"]."</br>";
	}
}
$conn->close();
?>