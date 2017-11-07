<?php
session_start();
require 'checksession.php';
$_SESSION["timer"]=time();

$url="/ch/HTML/p2.php";
header('Location:'.$url);//1st user

?>