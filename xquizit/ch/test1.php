<?php
	session_start();
	$uid=$_SESSION["userid1"];
    $usrname=$_SESSION["username1"];
	$Servername="localhost";
    $Username="conjupny_quiz";
    $Password="quiz@user";
    $dbname="conjupny_mydb";
    $sql="insert into usn values('".$uid."','".$usrname."')";
    $flagu=0;//to make redirection.
    $conn = mysqli_connect($Servername,$Username,$Password,$dbname);
    if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
    }
	$getusn="select userid from usn";
	$result=$conn->query($getusn);
	if($result->num_rows>=0)
	{
		while($row=$result->fetch_assoc())
		{
			if($uid==$row["userid"])
			{
				$flagu=1;
			}
		}
	}
	if($flagu==0||$result->num_rows==0)
	{
		$conn->query($sql);
		echo "inserted";
	}
	if($flagu==1)
	{
		$url1="http://xquizit.conjura.in/resubmit/message.html";//to redirect multi login users
		header('Location:'.$url1);
	//redirect multi login of users..
	}
	//$conn->query($sql);
	$url="/ch/checkfirst.php";
	header('Location:'.$url);
?>