<!--
Here, we write code for registration.
-->
<?php
require 'db_conn.php';
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$query = "INSERT INTO admin (Firstname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
$result = mysqli_query($conn, $query);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$query;
}
?>