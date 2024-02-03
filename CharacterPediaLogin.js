"use strict";

// when window loads this function will be implemented
window.onload = pageLoad;
function pageLoad() {
	// assigns the chkFields function to the onclick event so it will be executed when the buttons are clicked
	document.getElementById("login").onclick=chkFields;
	document.getElementById("signup").onclick=chkFields;
}

function chkFields() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	
	// if both username and password are empty then alert user
	if (username == "" && password == "") {
		alert("You did not enter both username and password. Please ensure both fields are filled out.");
		document.getElementById("username").focus();
		return false;
	}
	
	// if username is empty, alert user and move cursor to username field
	else if (username == ""){
		alert("You did not enter a username. Please ensure both fields are filled out.");
		document.getElementById("username").focus();
		return false;
	}
	
	// if password is empty, alert user and move cursor to password field
	else if (password == ""){
		alert("You did not enter a password. Please ensure both fields are filled out.");
		document.getElementById("password").focus();
		return false;
	}
}