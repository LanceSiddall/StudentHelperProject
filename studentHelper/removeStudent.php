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
			<ul>
				<li>
					<a href="mainPageLecturer.php" id="logo">Lecturer Helper</a>
				</li>
				<li>
					<a href="addRoom.php">Add Room</a>
				</li>
				<li>
					<a href="removeStudent.php" class="active">Remove Student</a><!--The anchor with the class of active will be white rather than grey to signify that it is the current page-->
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
					<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
						<form name="display" action="lectRemoveStudent.php" method="POST" >
							<div class="row cf"><!--Allows for the items to be aligned in a row-->
								<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
									<div class="row cf"><!--Allows for the items to be aligned in a row-->
											<h2>Remove Student</h>
									</div>
								</div>
							</div>
							<div class="row cf"><!--Allows for the items to be aligned in a row-->
								<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
									<p class="inputName" name="StudentEmail">Student Email: </p>
								</div>
								<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
									<input name="StudentEmail" required="true" type="text">
								</div>
							</div>
							<div class="row cf"><!--Allows for the items to be aligned in a row-->
								<div class="full">
									<input type="submit" id="submit" class="button" value="Submit" onclick="removeStudent()">
								</div>
							</div>
						</form>
					</div>
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
