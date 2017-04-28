function SuccSign() {
  alert("Sign up successfull, you may now login.");
  //Creates an alert that informs the user of the sucessful creation of their account
}

function newGroup() {
  alert("Study Group Added!");
  //Creates an alert that informs the user of the sucessful creation of their group
}

function removeStudent() {
  alert("Student removed");
  //Creates an alert that informs the user of the sucessful removal of a student
}

function groupJoined() {
  alert("Successfully joined group");
  //Creates an alert that informs the user of their sucessful joining of a group
}

function wrongUserPass() {
  alert("Wrong username or password");
  //Creates an alert that informs the user of an incorrect username or password
}

function roomAdded() {
  alert("Room Added");
  //Creates an alert that informs the user of the sucessful creation of a room
}

function compareEmail(){
	//Compares the two emails to ensure they're the same
	var email = document.getElementById("email").value.toLowerCase();
	//Loads the first email entered and puts it in lowercase
	var confirmEmail = document.getElementById("confirmEmail").value.toLowerCase();
	//Loads the second email entered and puts it in lowercase
	if (email === confirmEmail){
		//If the emails match...
		document.getElementById("emailValid").src = "images/valid.png";
		document.getElementById("emailValid").alt = "The two email addresses match.";
		//Put a tick next to the second email
		document.getElementById("submit").disabled = false;
		//Enable the submit button
	}else{
		//Otherwise...
		document.getElementById("emailValid").src = "images/invalid.png";
		document.getElementById("emailValid").alt = "The two email addresses do not match.";
		//Put a cross next to the second email
		document.getElementById("submit").disabled = true;
		//Disable the submit button
	}
}
