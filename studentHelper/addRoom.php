<?php
session_start();//Starts a php session so that if one hasn't already been started, there isn't an issue caused by calling a session variable
if(!$_SESSION['loggedIn']) {//If the user attempts to access this page without being logged in, they will be redirected to the login page
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Create Group</title>
	<link href="stylesheet2.css" rel="stylesheet" type="text/css">
	<script src="javascript.js">
	</script>
</head>
<body>
	<section id="externalWrapper"><!--Container for everything other than the footer-->
		<nav>
				<nav>
			<ul>
				<li>
					<a href="mainPageLecturer.php" id="logo">Lecturer Helper</a>
				</li>
				<li>
					<a href="addRoom.php" class="active">Add Room</a><!--The anchor with the class of active will be white rather than grey to signify that it is the current page-->
				</li>
				<li>
					<a href="removeStudent.php">Remove Student</a>
				</li>
				<li>
					<a href="courseworkDropoff.php">Coursework Dropoff</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
		<section id="internalWrapper"><!--Container for the main content of the page-->
			<div class="row cf"><!--Allows for the items to be aligned in a row-->
				<form name="createGroup" action="LectaddRoom.php" method="post">
					<div class="row cf"><!--Allows for the items to be aligned in a row-->
						<div class="full">
							<h2>Add Room</h2>
						</div>
					</div>
					<div class="row cf"><!--Allows for the items to be aligned in a row-->
						<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
							<p class="inputName" name="build_name">Building name</p>
						</div>
						<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
							<input id="buildingName" name="buildingName" required="true" type="text">
						</div>
					</div>
					<div class="row cf"><!--Allows for the items to be aligned in a row-->
						<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
							<p class="inputName" name="room_name">Room Name / Number:</p>
						</div>
						<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
							<input id="roomName" name="roomName" required="true" type="text">
						</div>
					</div>
					<div class="row cf"><!--Allows for the items to be aligned in a row-->
						<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
							<p class="inputName" name="theProjector">Room With Projector:</p>
						</div>
						<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
							<input type="radio" name="projector"
				<?php if (isset($projector) && $projector=="yes") echo "checked";?>
				value="yes"> Yes
				<input type="radio" name="projector"
				<?php if (isset($projector) && $projector=="no") echo "checked";?>
				value="no"> No
						</div>
					</div>
						<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<p class="inputName">Max Students (1 - 999): </p>
							</div>
							<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
								<input name="maxStudents" required="true" pattern="([0-9]|[0-9][0-9][0-9]|[0-9][0-9])">
							</div>
					</div>
					<div class="row cf"><!--Allows for the items to be aligned in a row-->
						<div class="quarter"><!--Same as half, but takes up 25% of the row instead of 50%-->
							<input type="submit" id="submit" class="button" value="Submit" onclick="roomAdded()">
						</div>
					</div>
				</form>
			</div>
		</section>
	</section>
	<footer><!--Contains some information that may be of interest to a small portion of users. Likely to missed by screen readers as it's the final piece of content on every page.-->
		<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img style="border:0;width:88px;height:31px"
				src="http://jigsaw.w3.org/css-validator/images/vcss"
				alt="Valid CSS!" />
		</a>
	</footer>
</body>
</html>
