<?php
session_start();
if(!$_SESSION['loggedIn']) {
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
	<section id="externalWrapper">
		<h2 style="display:none;">.</h2>
		<nav>

			<ul>
				<li>
					<a href="mainPageLecturer.php" id="logo">Lecturer Helper</a>
				</li>
				<li>
					<a href="addRoom.php">Add Room</a>
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
		<section id="internalWrapper">
			<div class="row cf">
				<div class="half">
								<div class="row cf">
						<div class="full">
							<a href="joinGroup.html">Remove Drop Off Point</a>
						</div>
					</div>						
					<div class="row cf">
					<form name="createGroup" action="LectaddRoom.php" method="post">
					<div class="row cf">
						<div class="full">
							<h2>Add Drop Of Point</h2>
						</div>
					</div>
					<div class="row cf">
						<div class="half">
							<p class="inputName" name="drop_name">Drop Off Name</p>
						</div>
						<div class="half">
							<input id="dropOfName" name="dropOfName" required="true" type="text">
						</div>
					</div>
					<div class="row cf">
						<div class="half">
							<p class="inputName" name="room_name">Room Name / Number:</p>
						</div>
						<div class="half">
							<input id="roomName" name="roomName" required="true" type="text">
						</div>
					</div>
					<div class="row cf">
						<div class="half">
							<p class="inputName" name="date">Date Time:</p>
						</div>
						<div class="half">
							<input id="dateAndTime" name="dateAndTime" required="true" type="text">
						</div>
					</div>
						<div class="row cf">
							
		
					</div>
					<div class="row cf">
						<div class="quarter">
							<input type="submit" id="submit" class="button" value="Submit" onclick="DropOffAdded()">
						</div>
					</div>
				</form>
						<div class="half">

																																											<form name="display" action="joinGroup.php" method="POST" >

						</div>

					</div>

				
				</div>
			</div>
					


			
			


		</section>

	</section>
	<footer>
				<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px"
						src="http://jigsaw.w3.org/css-validator/images/vcss"
						alt="Valid CSS!" />
				</a>
			</footer>
</body>
</html> 




