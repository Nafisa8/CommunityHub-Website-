"use strict";

// When the window loads, this function will be executed
window.onload = pageLoad;

// Function to handle the page load event
function pageLoad() {
    // Assigns the chkFields function to the onsubmit event so it will be executed when the form is submitted
    document.querySelector("form").onsubmit = chkFields;
}

// Function to check fields before form submission
function chkFields() {
    // Get values from various form fields
    var characterName = document.getElementById("CharacterName").value;
    var universe = document.getElementById("Universe").value;
    var introduction = document.getElementById("Introduction").value;
    var personality = document.getElementById("Personality").value;
    var abilities = document.getElementById("Abilities").value;
    var history = document.getElementById("History").value;
    var relationships = document.getElementById("Relationships").value;
    var miscellaneous = document.getElementById("Miscellaneous").value;

    // Check if any of the fields are empty
    if (
        characterName === "" ||
        universe === "" ||
        introduction === "" ||
        personality === "" ||
        abilities === "" ||
        history === "" ||
        relationships === "" ||
        miscellaneous === ""
    ) {
        // Display an alert if any field is empty
        alert("Please fill out all fields before submitting.");
        return false; // Prevent the form from submitting
    }

    // Additional validation or processing logic can be added here

    // If everything is filled out, the form will be submitted
    return true;
}