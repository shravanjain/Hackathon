<?php
	session_start();
	include("DBConn.php");
	date_default_timezone_set('Asia/Kolkata');
	$target_dir = "uploads/".$_SESSION['email']."/";
	if (!file_exists("uploads/".$_SESSION['email']."/")) 
    	mkdir("uploads/".$_SESSION['email']."/", 0777, true);

	$Signature=$target_dir."Signature.jpg";
	move_uploaded_file($_FILES["Signature"]["tmp_name"],$Signature);

	$Marksheet=$target_dir."Marksheet.jpg";
	move_uploaded_file($_FILES["Marksheet"]["tmp_name"],$Marksheet);

	$PassingCertificate=$target_dir."PassingCertificate.jpg";
	move_uploaded_file($_FILES["PassingCertificate"]["tmp_name"],$PassingCertificate);

	$NationalityProof=$target_dir."NationalityProof.jpg";
	move_uploaded_file($_FILES["NationalityProof"]["tmp_name"],$NationalityProof);

	$PreviousLeaving=$target_dir."PreviousLeaving.jpg";
	move_uploaded_file($_FILES["PreviousLeaving"]["tmp_name"],$PreviousLeaving);

	$date=date("Y-m-d");
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$dob=date("Y-m-d", strtotime($_POST["dob"]));
	$branch=$_POST["branch"];
	$AcademicYearOfAdmission=$_POST["AcademicYearOfAdmission"];
	$YearofPassing=$_POST["YearofPassing"];
	$percentage=$_POST["percentage"];
	$caste=$_POST["caste"];
	$SubCaste=$_POST["SubCaste"];
	$YearOfAdmission=$_POST["YearOfAdmission"];
	$SchoolName=$_POST["SchoolName"];

	$sql="insert into form(date,Name,Phone,DOB,Branch,YearOfAdmission,YearOfPassing,Percentage,Caste,SubCaste,FYorDSE,SchoolName,HODStatus) values ('$date','$name','$phone','$dob','$branch','$AcademicYearOfAdmission','$YearofPassing','$percentage','$caste','$SubCaste','$YearOfAdmission','$SchoolName','1')";
	$conn->query($sql);

	header("Location: default.php");
?>