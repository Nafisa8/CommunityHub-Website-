<?php
//This code will be used to edit the character pages

// Connect to the database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "gsunday1", "gsunday1", "gsunday1");

// SQL query to retrieve data from the character_table
$sql = "SELECT * FROM character_table";
$result = mysqli_query($db, $sql);

// Check if there are any rows in the result
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Character Name: " . $row["character_name"] . "<br>";
        echo "Universe: " . $row["Universe"] . "<br>";
        echo "Gallery: " . $row["Gallery"] . "<br>";
        echo "Introduction: " . $row["Introduction"] . "<br>";
        echo "Personality: " . $row["Personality"] . "<br>";
        echo "Relationships: " . $row["Relationships"] . "<br>";
        echo "Abilities: " . $row["Abilities"] . "<br>";
        echo "Miscellaneous: " . $row["Miscellaneous"] . "<br><br>";
    }
} else {
    echo "No records in the database.";
}

// Close the database connection
mysqli_close($db);
?>
