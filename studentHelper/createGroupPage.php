<?php
session_start();//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
if(!$_SESSION['loggedIn']) {//If the user attempts to access this page without being logged in, they will be redirected to the login page
    header('location: index.php');
}
require 'Database/configure.php';
$_POST['submit']='false';
$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS, MYSQL_DB);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Create Group</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<script src="javascript.js">
	</script>
</head>
<body>
	<section id="externalWrapper"><!--Container for everything other than the footer-->
		<nav>
			<ul>
				<li>
					<a href="mainPage.php" id="logo">Student Helper</a>
				</li>
				<li>
					<a class="active" href="createGroupPage.php">Create Group</a><!--The anchor with the class of active will be white rather than grey to signify that it is the current page-->
				</li>
				<li>
					<a href="joinGroup.php">Join Group</a>
				</li>
				<li>
					<a href="routeFinder.php">Route Finder</a>
				</li>
				<li>
					<a href="courseworkDropoffStud.php">Coursework Dropoff</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
		<section id="internalWrapper"><!--Container for the main content of the page-->
			<div class="row cf"><!--Allows for the items to be aligned in a row-->
				<div class="full">
					<form action="createGroup.php" id="createGroup" method="post" name="createGroup">
						<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="full">
								<h2>Create Group</h2>
							</div>
						</div>
						<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<p class="inputName">Study Group Name:</p>
							</div>
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<input name="StudyName" required="true" type="text">
							</div>
						</div>
						<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<p class="inputName">Subject:</p>
							</div>
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<input name="subject" required="true" type="text">
							</div>
						</div>
						<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<p class="inputName">Building and Room Name:</p>
							</div>
							<div class="full">
								<select name="room">
									<?php
									    $rooms="SELECT buildingName, roomName, maxStudents, projector FROM room";
									    if(isset($rooms)) {
									        $sql=$conn->query($rooms);
									        while ($row = $sql->fetch_assoc()){
									            unset($buildingName, $roomName, $maxStudents);
									            $buildingName = $row['buildingName'];
									            $roomName = $row['roomName'];
									            $maxStudents = $row['maxStudents'];
									            $projector = $row['projector'];
									            echo '<option value="'.$buildingName. " " . $roomName.'">'.$buildingName." " . $roomName. " (Max students: " . $maxStudents . ")" . " Projector: " . $projector .'</option>';
							                };
							                echo "<input name='maxStudents' hidden=true  value='{$maxStudents}'>";
											echo "<input name='projector' hidden=true  value='{$projector}'>";
				                        };
				                    ?>
								</select>
							</div>
						</div>
						<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<p class="inputName">Date (DD/MM/YYYY):</p>
							</div>
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<input name="date" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" required="" type="date">
							</div>
						</div>
						<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<p class="inputName">Time (1 Hour Session HH:MM ):</p>
							</div>
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<input name="time" pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])" required="" type="time">
							</div>
						</div>
						<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="quarter"><!--Same as half, but takes up 25% of the row instead of 50%-->
								<input class="button" id="submit" onclick="newGroup()" type="submit" value="Submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</section>
	<footer><!--Contains some information that may be of interest to a small portion of users. Likely to missed by screen readers as it's the final piece of content on every page.-->
		<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a> 
		<a href="http://jigsaw.w3.org/css-validator/check/referer"><img alt="Valid CSS!" src="http://jigsaw.w3.org/css-validator/images/vcss" style="border:0;width:88px;height:31px"></a>
	</footer>
</body>
</html>
