<?php
require 'Database/configure.php';//Allows functions from 'Database/configure.php' to be run

session_start();//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
if(!$_SESSION['loggedIn']) {//If the user attempts to access this page without being logged in, they will be redirected to the login page
	header('location: index.php');
}

// $_POST['submit']='true';

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);//Runs mysqli_connect with parameters intialised in configure.php with the result stored in $conn

$studyName = $_POST['StudyName'];//Loads the form variable StudyName into the PHP variable studyName
$room = $_POST['room'];
$subject = $_POST['subject'];
$projector = $_POST['projector'];
$date = $_POST['date'];
$time = $_POST['time'];
$studyGroupMaxStudents = $_POST['maxStudents'];

$studyRoom = $conn->query("INSERT INTO studyGroup (StudyName, room, subject, projector, date, time, studyGroupMaxStudents ) VALUES ('{$studyName}','{$room}', '{$subject}','{$projector}','{$date}','{$time}', '$studyGroupMaxStudents')");//Results from the SQL query are stored in studyRoom

header('location: createGroupPage.php')//User is returned to the createGroupPage

?>
