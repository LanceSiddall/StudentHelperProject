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
	<title>Coursework Dropoff</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
	<section id="externalWrapper"><!--Container for everything other than the footer-->
		<nav>
			<ul>
				<li>
					<a href="index.php" id="logo">Student Helper</a>
				</li>
				<li>
					<a href="createGroupPage.php">Create Group</a>
				</li>
				<li>
					<a href="joinGroup.php">Join Group</a>
				</li>
				<li>
					<a href="routeFinder.php">Route Finder</a>
				</li>
				<li>
					<a class="active" href="courseworkDropoffStud.php">Coursework Dropoff</a><!--The anchor with the class of active will be white rather than grey to signify that it is the current page-->
				</li>
			</ul>
			<ul>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
		<section id="internalWrapper"><!--Container for the main content of the page-->
			<div class="row cf"><!--Allows for the items to be aligned in a row-->
				<div class="third"><!--Gives the containing items 33.33% the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
					<img alt="" src="St_Images/java.gif">
				</div>
				<div class="third"><!--Gives the containing items 33.33% the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
					<img alt="" src="St_Images/Mathfun.gif">
				</div>
				<div class="third"><!--Gives the containing items 33.33% the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
					<img alt="" src="St_Images/Webfun.gif">
				</div>
			</div>
		</section>
	</section>
	<footer><!--Contains some information that may be of interest to a small portion of users. Likely to missed by screen readers as it's the final piece of content on every page.-->
		<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img alt="Valid CSS!" src="http://jigsaw.w3.org/css-validator/images/vcss" style="border:0;width:88px;height:31px"></a>
	</footer>
</body>
</html>
