<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$discibe = $_POST['discibe'];
$qualification = $_POST['qualification'];

$conn = new mysqli('localhost','root','','visionnew');
	if($conn->connect_error){
		die('Connection Failed :' .$conn->connect_error);
	}
    else{
		$stmt = $conn->prepare("insert into teacher(firstname,lastname,contact,email,password,birthdate,gender,discibe,qualification)
			values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssissssss",$firstname, $lastname,$contact, $email,$password, $birthdate, $gender, $discibe, $qualification);
		$stmt->execute();
		echo "<script> window.location.assign('Untitled-1.html'); </script>";
		$stmt->close();
		$conn->close();
	}





?>