	<?php
 // First, connect to the database
 $db = mysqli_connect(
     "studentdb-maria.gl.umbc.edu",
     "gsunday1",
     "gsunday1",
     "gsunday1"
 );

 // Check the connection
 if (!$db) {
     die("Connection failed: " . mysqli_connect_error());
 }

 // Retrieve character name from the URL
 $universeName = $_GET["UniverseName"];

 // Create and execute SQL query to fetch data for the given character name
 $sql = "SELECT * FROM Universe_Table WHERE UniverseName = '$universeName'";
 $result = mysqli_query($db, $sql);

 // Check if the query was successful
 if ($result) {
     // Fetch the data as an associative array
     $universeData = mysqli_fetch_assoc($result);
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
	    <link rel="stylesheet" type="text/css" href="CSSUniverseProfile.css">
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
	      <a href="#sectionheader">
	        <span class="sectionheader">Sections</span>
	      </a>
	      <a href="#Universe"> Universe</a>
	      <a href="#Introduction"> Introduction</a>
	      <a href="#Plot"> Plot</a>
	      <a href="#Lore"> Lore</a>
	      <a href="#Characters"> Characters</a>
	      <a href="#History"> History</a>
	      <a href="#Author"> Author</a>
	      <a href="#Miscellaneous"> Miscellaneous</a>
	    </div>
	    <div class="content">
	    <form action="" method="post" enctype="multipart/form-data">
        <h1 id="Universe"><?php echo isset($universeData["UniverseName"])
            ? $universeData["UniverseName"]
            : ""; ?></h1>
        <br>
		<h2>Introduction</h2>
        <p id="Introduction"><?php echo isset($universeData["Introduction"])
            ? $universeData["Introduction"]
            : ""; ?></p>
        <br>
		<h2>Plot</h2>
        <p id="Plot"><?php echo isset($universeData["Plot"])
            ? $universeData["Plot"]
            : ""; ?></p>
        <br>
		<h2>Lore</h2>
        <p id="Lore"><?php echo isset($universeData["Lore"])
            ? $universeData["Lore"]
            : ""; ?></p>
		<h2>Characters</h2>
        <p id="Characters"><?php echo isset($universeData["Characters"])
            ? $universeData["Characters"]
            : ""; ?></p>
        <br>
		<h2>History</h2>
        <p id="History"><?php echo isset($universeData["History"])
            ? $universeData["History"]
            : ""; ?></p>
        <br>
		<h2>Author</h2>
        <p id="Author"><?php echo isset($universeData["Author"])
            ? $universeData["Author"]
            : ""; ?></p>
        <br>
		<h2>Miscellaneous</h2>
        <p id="Miscellaneous"><?php echo isset($universeData["Miscellaneous"])
            ? $universeData["Miscellaneous"]
            : ""; ?></p>
        <br>
    </form>
	</div>
	  </body>
	</html>