<?php
$host = "localhost";
$username = "root";  // default username ya XAMPP
$password = "";      // default password ya XAMPP ni empty
$dbname = "dms";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>