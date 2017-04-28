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
	<title>Route Finder</title>
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
					<a class="active" href="routeFinder.php">Route Finder</a><!--The anchor with the class of active will be white rather than grey to signify that it is the current page-->
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
					<div class="row cf"><!--Allows for the items to be aligned in a row-->
						<div class="full">
							<h3>Route Finder</h3>
							<div id="map"><!--Area for google map to be embedded-->
								<script>
								  function initMap() {
									var directionsService = new google.maps.DirectionsService;
									var directionsDisplay = new google.maps.DirectionsRenderer;
									var map = new google.maps.Map(document.getElementById('map'), {
									  zoom: 6,
									  center: {lat: 53, lng: 0}
									});
									directionsDisplay.setMap(map);

									var onChangeHandler = function() {
									  calculateAndDisplayRoute(directionsService, directionsDisplay);
									};
									document.getElementById('start').addEventListener('change', onChangeHandler);
									document.getElementById('end').addEventListener('change', onChangeHandler);
								  }

								  function calculateAndDisplayRoute(directionsService, directionsDisplay) {
									directionsService.route({
									  origin: document.getElementById('start').value,
									  destination: document.getElementById('end').value,
									  travelMode: 'WALKING'
									}, function(response, status) {
									  if (status === 'OK') {
										directionsDisplay.setDirections(response);
									  } else {
										window.alert('Directions request failed due to ' + status);
									  }
									});
								  }
								</script>
						</div>
					</div>
					<div class="row cf"><!--Allows for the items to be aligned in a row-->
							<div class="row cf"><!--Allows for the items to be aligned in a row-->
								<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
									<b>Start Location: </b>
								</div>
								<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
									<select id="start"><!--List of start locations for the map-->
										<option value="Buckingham Building, Portsmouth">Anglesea Building</option>
										<option value="Buckingham Building, Portsmouth">Buckingham Building</option>
										<option value="Portland Building, Portsmouth">Portland Building</option>
										<option value="James Watson Hall, Guildhall Walk, Portsmouth">James Watson Halls</option>
										<option value="Lion Gate Building, Portsmouth">Lion Gate Building</option>
										<option value="Spinnaker Sports Centre, Cambridge Road, Portsmouth">Spinnaker Sports Centre </option>
										<option value="Park Building, Portsmouth">Park Building</option>
										<option value="The University Library, University of Portsmouth, Cambridge Road, Portsmouth">UoP Library</option>
									</select>
								</div>
							</div>
							<div class="row cf"><!--Allows for the items to be aligned in a row-->
								<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
									<b style="width:100%;">End Location: </b>
								</div>
								<div class="half"><!--Gives the containing items half the width of the parent to fill, expands when the page dimensions hit a breakpoint to 100%-->
									<select id="end"><!--List of end locations for the map-->
										<option value="Buckingham Building, Portsmouth">Anglesea Building</option>
										<option value="Buckingham Building, Portsmouth">Buckingham Building</option>
										<option value="Portland Building, Portsmouth">Portland Building</option>
										<option value="James Watson Hall, Guildhall Walk, Portsmouth">James Watson Halls</option>
										<option value="Lion Gate Building, Portsmouth">Lion Gate Building</option>
										<option value="Spinnaker Sports Centre, Cambridge Road, Portsmouth">Spinnaker Sports Centre </option>
										<option value="Park Building, Portsmouth">Spinnaker Sports Centre </option>
										<option value="The University Library, University of Portsmouth, Cambridge Road, Portsmouth">UoP Library</option>
									</select>
								</div>
						<script
						src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFjgJpxvapWFwFlIl9pezwwWeb5YhutHs&callback=initMap">
						</script>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<footer><!--Contains some information that may be of interest to a small portion of users. Likely to missed by screen readers as it's the final piece of content on every page.-->
		<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
		</a>
	</footer>
</body>
</html>
