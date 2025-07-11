<?php
session_start();

require ('database.php');

$username = $_POST['username'];
$pwd = $_POST['pwd'];


$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND pwd = ?");
$stmt ->bind_param("ss", $username,$pwd);
$stmt ->execute();
$result = $stmt ->get_result();

//$result = fetch_result($)


if ($result) {
    if ($result ->num_rows > 0) {
       $user = $result->fetch_assoc();
       $_SESSION['logged_in'] = true;

       $_SESSION['username'] = $user['username'];

       header("location:../form.php");
    
    }else{
        header("location:../index.html");
    }
}else{
    echo"query failed";
}

