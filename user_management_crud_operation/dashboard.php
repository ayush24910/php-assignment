<?php


$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "users";
$email=$_GET["email"];
$password=$_GET["pass"];
// Create connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT user_name,email_id,password FROM users_details where email_id='$email' and password='$password'";

$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//var_dump($row);

if ($row['email_id']==$email && $row['password']==$password) {
  // output data of each row
  echo "login success".$row['user_name'];  
} else {
  echo "0 results";
}

mysqli_close($conn);




?>