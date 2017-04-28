<link rel="stylesheet" href="CSS/main.css" type="text/css">
<?PHP
session_start();//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
if(!$_SESSION['loggedIn']) {//If the user attempts to access this page without being logged in, they will be redirected to the login page
	header('location: index.php');
}

require 'Database/configure.php';//Allows functions from 'Database/configure.php' to be run
//if(isset($_SESSION['Email'])) {
$email = $_SESSION['Email'];

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);//Runs mysqli_connect with parameters intialised in configure.php with the result stored in $conn

$users="SELECT ID FROM users WHERE email = '{$email}'";//Selects the id from users where the email is the same as the one that the user logged in with
$userID= $conn->query($users);//Result of the query is stored in $userId
$studyGroup=$_POST['studyGroupName'];//studyGroup is set to the name of the group submitted by the form
$studyGroupID= $conn->query("SELECT studyID FROM studygroup WHERE studyName = '$studyGroup' ");//Result of the query is stored in $studyGroupID

while ($row = $userID->fetch_assoc()) {
  while ($row2 = $studyGroupID->fetch_assoc()) {
      $addUserToGroup = $conn->query("INSERT INTO instudygroup (user_FK, studyGroup_FK) VALUES ({$row['ID']},{$row2['studyID']})");
  }
};

//}
header('location: joinGroup.php');//User is returned to the joinGroup page
?>
