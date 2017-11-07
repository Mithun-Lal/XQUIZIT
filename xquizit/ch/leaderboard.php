<?php
$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";

 $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select * from quiztable";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo "<table class='table table-striped'>";
			echo "<tr>";
			echo "<th>Username</th><th>College</th><th>Finishtime</th><th>Score</th>";
			echo "</tr>";
		
	while($row=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "  <td>".$row["username"]."</td><td>".$row["college"]."</td><td>".$row["finishtime"]."</td><td>".$row["score"]."</td>";
		echo "</tr>";	
			
	}
	echo "</table>";
}
else 
echo "";
$conn->close();
?>