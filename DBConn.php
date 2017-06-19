<?php
	$uname="root";
	$pass="mysql";
	$host="localhost";
	$db="Hackathon";
	$conn=new mysqli($host,$uname,$pass,$db) or die ("Connection Unsuccessful") ;
	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
    }  
?>