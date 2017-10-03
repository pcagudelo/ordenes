<?php 
session_start();
	if(!isset($_SESSION["usuario"])){
		header("location:index.html");
	}

	$user_cod=$_SESSION["usuario"];
 ?>