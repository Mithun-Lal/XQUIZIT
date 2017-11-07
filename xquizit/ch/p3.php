<?php
    session_start();
    require 'checksession.php';
     $a=$_POST["ans1"];
     $b=$_POST["ans2"];
     $c=$_POST["ans3"];
     $d=$_POST["ans4"];
     $e=$_POST["ans5"];
     $f=$_POST["ans6"];
     $g=$_POST["ans7"];
     $h=$_POST["ans8"];
     $i=$_POST["ans9"];
     $j=$_POST["ans10"];
     //$userid="getfromfb";

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

	//$db="CREATE DATABASE mydb";
	$getans="select * from questions";
	/*if($conn->query($db)==TRUE)
		echo "database created";
	else
		echo "error".$conn->error;*/
	/*if($conn->query($que))
		echo "table created";
	else
		echo "not created".$conn->error;*/
	//$conn->query($ins);
        $timestamp=$_SESSION["timer"];
        $curuserid=$_SESSION["userid1"];
        $curusername=$_SESSION["username1"];
        $newtime=time()-$timestamp;
        echo ($newtime);
	$score=0;
    $result=$conn->query($getans);
    if($result->num_rows>0)
    {
    while($row=$result->fetch_assoc())
    {
    	echo "</br>passans=".$a."</br>";
    	if($a==$row["ans"])
    		$score++;
    	if($b==$row["ans"])
    		$score++;
    	if($c==$row["ans"])
    		$score++;
    	if($d==$row["ans"])
    		$score++;
    	if($e==$row["ans"])
    		$score++;
    	if($f==$row["ans"])
    		$score++;
    	if($g==$row["ans"])
    		$score++;
    	if($h==$row["ans"])
    		$score++;
    	if($i==$row["ans"])
    		$score++;
    	if($j==$row["ans"])
    		$score++;
		//echo "table created";
    }
}
$flaguser=0;
$college=$_SESSION["college"];
$insertscore="insert into quiztable values('".$curuserid."','".$curusername."','".$college."',".$newtime.",'".$score."')";
$updatescore="update quiztable set score=score+'".$score."' where userid='".$curuserid."'";
	$checkuserforupdate="select userid from quiztable";
	$result=$conn->query($checkuserforupdate);

	if($result->num_rows>=0)
    {
    while($row=$result->fetch_assoc())
    {
    	if($row["userid"]==$curuserid)
    		$flaguser=1;
    }
    }
    if($flaguser==0)
    {
        $conn->query($insertscore);
        echo "</br>inserted";
    }    	
    else
    {
    	if($conn->query($updatescore)==TRUE)
    		echo "</br>updated";
    	else 
    		echo "not=".$conn->error;
    }
session_unset();
session_destroy();
$conn->close();
echo "</br>closed";
$url="http://xquizit.conjura.in/resubmit/submit.html";//to redirect to final submit page
header('Location:'.$url);

?>

