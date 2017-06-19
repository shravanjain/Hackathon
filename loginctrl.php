<?php
	include("DBConn.php");
	session_start();
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$sql="select * from users where email='$email'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		$row=$result->fetch_assoc();
		if($pass==$row['pass'])
		{
			$_SESSION['loggedin']=true;
			$_SESSION['user']=$row['email'];
			$_SESSION['UserType']=$row['type'];
			header("Location: default.php");
		}
	}
?>