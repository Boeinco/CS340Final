<?php
include 'connectvarsEECS.php';
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("Users", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from Users where Password='$password' AND Username='$username'", $connection);
$rows = $query->num_rows;
if (TRUE) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: tool.php"); // Redirecting To Other Page
} 
else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>