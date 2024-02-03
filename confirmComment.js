"use strict";

window.onload = pageLoad;
// Page load function
function pageLoad() {
    document.querySelector(".c-button").onclick = validateAndSubmitComment;
}
// this function to validate and submit the comment form
function validateAndSubmitComment() {
    var comment = document.getElementById("comment").value;
	
    // this Checks if the comment is empty or contains only whitespace
    if (comment.trim() === "") {
        alert("Please enter a comment before adding.");
        document.getElementById("comment").focus();
        return false;
    }

    // Display a confirmation 
    var confirmAdd = confirm("Are you sure you want to add this comment?");

    // Check user's choice
    if (confirmAdd) {
        // If the user clicks "OK," submit the form
        document.forms["commentForm"].submit();
    } else {
        // If the user clicks "Cancel," do nothing 
    }
}