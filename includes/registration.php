<?php 
include ('database.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

//firstname 	lastname 	username 	pwd 	email 	phonenumber 	

$sql = "INSERT INTO users (firstname, lastname, username, pwd, email, phonenumber) VALUES (?, ?, ?, ?, ?, ?);" ;
$stmt = $conn->prepare($sql);
$stmt ->bind_param("sssssi", $firstname, $lastname, $username, $pwd, $email, $phonenumber);
$stmt ->execute();
$stmt ->close();

header("location:../index.html");

