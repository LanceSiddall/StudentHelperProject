<?php
require 'Database/configure.php';//Allows functions from 'Database/configure.php' to be run

session_start();//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
if(!$_SESSION['loggedIn']) {//If the user attempts to access this page without being logged in, they will be redirected to the login page
	header('location: index.php');
}

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);
$email = $_POST['StudentEmail'];//Loads the form variable StudentEmail into the PHP variable email
$result = $conn->query("DELETE FROM `users` WHERE `users`.`email` = '{$email}'");
echo "<script src='javascript.js'>
				alert('User Removed!')//Creates a JS alert informing the user that they've succesfully removed a user
			<script>"
header('location: removeStudent.php')//Returns the user to removeStudent
?>
