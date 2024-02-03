<?php
// First, connect to the database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "gsunday1", "gsunday1", "gsunday1");

// Check the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve character name from the URL
$characterName = "Luffy";

// Create and execute SQL query to fetch data for the given character name
$sql = "SELECT * FROM Characters_Table WHERE CharacterName = '$characterName'";
$result = mysqli_query($db, $sql);

// Check if the query was successful
if ($result) {
    // Fetch the data as an associative array
    $characterData = mysqli_fetch_assoc($result);
} else {
    // Handle the case where the query fails
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

// Close the database connection
mysqli_close($db);
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Characterpedia-edit</title>
	<!--I used font awesome which gives remote links for icons you can use links throughout in the file-->
	<script src="https://kit.fontawesome.com/3b9422a35a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSSCharacterProfile.css">
</head>
<body>


<!--I used font awesome for the icons here and each acts as part of the link-->
	    <div class="sidenav">
	      <img src="CVClogo.png" alt="Website Logo">
	      <a href="Characterpedia_Search.html">
	        <i class="fa-solid fa-magnifying-glass"></i> Search </a>
	      <a href="Universe_Profile_Edit.html">
	        <i class="fa-solid fa-plus"></i> Create Verse </a>
	      <a href="Character_Profile_Edit.html">
	        <i class="fa-solid fa-user-plus"></i> Create Character </a>
	      <a href="profile.html">
	        <i class="fa-regular fa-user"></i></i> Profile </a>
	      <a href="About.html">
	        <i class="fa-solid fa-bars"></i> About </a>
	    </div>
	
	<div class="secondsidenav">
        <a href="#sectionheader"> <span class= "sectionheader">Sections</span></a>
        <a href="#Character_name"> Character</a>
		<a href="#Universe"> Universe</a>
        <a href="#Gallery"> Gallery</a>
		<a href="#Introduction"> Introduction</a>
        <a href="#Personality"> Personality</a>
		<a href="#Relationships"> Relationships</a>
		<a href="#Abilities"> Abilities</a>
		<a href="#History"> History</a>
		<a href="#Miscellaneous"> Miscellaneous</a>
    </div>
	

    <div class="content">
	<form action="" method="post" enctype="multipart/form-data">
        <h1 id="Character_name"><?php echo isset($characterData["CharacterName"]) ? $characterData["CharacterName"] : ''; ?></h1>
        <br>
		<h2>Universe</h2>
        <p id="Universe"><?php echo isset($characterData["Universe"]) ? $characterData["Universe"] : ''; ?></p>
        <br>
		<h2>Introduction</h2>
        <p id="Introduction"><?php echo isset($characterData["Introduction"]) ? $characterData["Introduction"] : ''; ?></p>
        <br>
		<h2>Personality</h2>
        <p id="Personality"><?php echo isset($characterData["Personality"]) ? $characterData["Personality"] : ''; ?></p>
        <br>
		<h2>Ability</h2>
        <p id="Ability"><?php echo isset($characterData["Abilities"]) ? $characterData["Abilities"] : ''; ?></p>
        <br>
		<h2>History</h2>
        <p id="History"><?php echo isset($characterData["History"]) ? $characterData["History"] : ''; ?></p>
        <br>
		<h2>Relationships</h2>
        <p id="Relationships"><?php echo isset($characterData["Relationships"]) ? $characterData["Relationships"] : ''; ?></p>
        <br>
		<h2>Miscellaneous</h2>
        <p id="Miscellaneous"><?php echo isset($characterData["Miscellaneous"]) ? $characterData["Miscellaneous"] : ''; ?></p>
        <br>
    </form>
	</div>
</body>
</html>