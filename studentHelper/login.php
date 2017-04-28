<script src="javascript.js">
</script>
<?PHP
session_start();//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
require 'Database/configure.php';
$email=$_POST['Email'];//Loads the form variable Email into the PHP variable email
$password=$_POST['password'];

$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);

$login="SELECT * FROM `users` WHERE Email = '$email' AND password = '$password' ";
//Loads all of the data where the email and password match those provided by the user
$result=(mysqli_query($conn,$login));
$row=mysqli_fetch_array($result);

if(!($row['Email'] == $email && $row['Password'] == $password)) {
	//If the either the email or the password are wrong then the user is notified of this and returned to the login page
	echo '<script type="text/javascript">',
     'wrongUserPass();',
     '</script>';
	header('location:index.php');
} else {
	//If the username and password are correct then the the session variable of logged in is set to true and the session email is set to the one provided in the form
	$_SESSION[loggedIn]='true';
	$_SESSION[Email] = $_POST['Email'];

if($row['userType'] == stud) {
	//If the userType is student then the user will be sent to the student version of the site otherwise they will be sent to the lecturer version
	header('location:mainPage.php');
} else {
	header('location:mainPageLecturer.php');
	}
}
?>
