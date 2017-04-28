<?PHP
require 'Database/configure.php';//Allows functions from 'Database/configure.php' to be run

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);//Runs mysqli_connect with parameters intialised in configure.php with the result stored in $conn

$buildName = $_POST['buildingName'];//Loads the form variable buildingName into the PHP variable buildName
$roomName = $_POST['roomName'];//Loads the form variable roomName into the PHP variable roomName
$maxStudents = $_POST['maxStudents'];//Loads the form variable maxStudents into the PHP variable maxStudents
$projector = $_POST['projector'];//Loads the form variable projector into the PHP variable projector

$newRoom = $conn->query("INSERT INTO room (buildingName, roomName, maxStudents, projector) VALUES ('{$buildName}','{$roomName}','{$maxStudents}','{$projector}')");//Inserts the new data into the SQL table of room

header('location: addRoom.php');

?>
