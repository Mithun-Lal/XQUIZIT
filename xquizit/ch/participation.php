<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>

<?php
$Servername="localhost";
$Username="conjupny_quiz";
$Password="quiz@user";
$dbname="conjupny_mydb";

 $conn = mysqli_connect($Servername, $Username, $Password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select * from usn";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo "<table >";
			echo "<tr>";
			echo "<th>Index</th><th>Username</th>";
			echo "</tr>";
		$index=1;
	while($row=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$index."</td><td>".$row["username"]."</td>";
		echo "</tr>";	
		$index++;
			
	}
	echo "</table>";
}
else 
echo "empty";
$conn->close();
?>
</body>
</html>