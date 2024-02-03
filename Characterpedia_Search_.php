<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Website</title>
	<!--I used font awesome which gives remote links for icons you can use links throughout in the file-->
	<script src="https://kit.fontawesome.com/3b9422a35a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSSCharacterSearch.css">
</head>
<body>
<!--I used font awesome for the icons here and each acts as part of the link-->
    <div class="sidenav">
        <img src="CVClogo.png" alt="Website Logo">
        
        <a href="#"><i class="fa-solid fa-magnifying-glass"></i>  Search</a>
        <a href="#"><i class="fa-solid fa-plus"></i>  Create Verse</a>
		<a href="#"><i class="fa-solid fa-user-plus"></i>  Create Character</a>
        <a href="#"><i class="fa-regular fa-user"></i>  Profile</a>
		<a href="#"><i class="fa-solid fa-bars"></i>  About</a>
    </div>
    
    <!-- _____________________________________________________________________________________________-->
    <!--  HTML CODE FOR SEARCH PAGE FUNCTIONALITY -->
<!--Insert content here-->
    <div class="content">
        <h1>Character Lookup</h1>
                    
        
        <p>Search below for characters from any universe!</p>
        <form name= "search" action= "Characterpedia_Search_.php" method="POST"> <!-- code to create searchbar -->
            <input type="text" id="search"  name = "search" placeholder="Find your character" required> <!-- greyed out text in the searchbar -->
            <input type="submit" value="Explore">
        </form>
        
    
  
      <?php
        // PHP script for validating user input (not allowing blank entries)
        // will also return the result the user enters
        
        $search = $_POST["search"];
        
        $db = mysqli_connect("studentdb-maria.gl.umbc.edu", "gsunday1", "gsunday1", "gsunday1");
        
        $searchfor = '%' . $search . '%'; // this matches any entered term in the search bar to the database where we are querying the data
        
        $constructed_query = "SELECT * FROM Characters_Table WHERE CharacterName LIKE '$searchfor'";
        $result = mysqli_query($db, $constructed_query);
        
        if (!$result) { //prints an error if result is not found
          print("Error - query could not be executed");
          $error = mysqli_error($db);
          print "<p> . $error . </p>";
          exit;
        }
        
        $num_rows = mysqli_num_rows($result);
        
        if ($num_rows > 0) {
          // Print table headers
          echo '<table border="1">';
          echo '<tr><th>Character Name</th><th>Introduction</th><th>Universe</th></tr>';
          
          // Print table rows
          while ($row_array = mysqli_fetch_assoc($result)) {
            echo '<tr style="padding: 12px; border: 1px solid black; text-align: left;">';
            echo '<tr>';
            echo '<td>' . $row_array['CharacterName'] . '</td>';
            echo '<td>' . $row_array['Introduction'] . '</td>';
            echo '<td>' . $row_array['Universe'] . '</td>';
            echo '</tr>';
          }
          
          echo '</table>';
          
          // Fill up array with names
          $arr = ["Luffy", "Batman", "Johnn Washington"];
          
          // retrieve value of parameter by name 'username' and store the value in the local variable $q
          $q = $search;
          
          if (in_array($q, $arr)) {
            $response = "located in database";
          } else {
            $response = "not located";
          }
          
          echo $response;
        } else {
          echo 'No results found.';
        }
      ?>

    </div>
  
  <div class = content>
    <img src = CVCbanner.png>
  </div>  
  
</body>
</html>