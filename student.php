<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$Birthdate = $_POST['Birthdate'];
$gender = $_POST['gender'];

$conn = new mysqli('localhost','root','','visionnew');
	if($conn->connect_error){
		die('Connection Failed :' .$conn->connect_error);
	}

?>