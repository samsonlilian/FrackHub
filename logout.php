<?php   
session_start(); //to ensure you are using same session
include "./conn.php";
$email=$_SESSION['email'];

if(session_destroy()){ //destroy the session

	  header("location: ./login.php");
}
exit();
?>