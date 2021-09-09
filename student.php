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
    else{
		$stmt = $conn->prepare("insert into student(firstname,lastname,email,password,Birthdate,gender)
			values(?,?,?,?,?,?)");
		$stmt->bind_param("ssssss",$firstname, $lastname, $email,$password, $Birthdate, $gender);
		$stmt->execute();
		echo "<script> window.location.assign('#'); </script>";
		$stmt->close();
		$conn->close();
	}
    

?>