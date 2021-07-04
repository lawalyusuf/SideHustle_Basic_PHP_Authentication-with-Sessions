<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>


<b>Congratulation! Welcome to Basic PHP Login Application System. <a href="logout.php">Click here</a> to Logout.</b>
