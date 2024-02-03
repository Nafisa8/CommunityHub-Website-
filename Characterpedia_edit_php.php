<!doctype html>
<html>
<head>
<title>Insert Comment in Database</title>
</head>
<body>
<?php
//first connect to my database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "gsunday1", "gsunday1", "gsunday1");
if (mysqli_connect_errno()) {
        exit("Error - Could not connect to MySQL");
    }
//put all html variables into PHP variables
// $name = $_POST["name"];
// $comments = $_POST["comments"];
// $phone = $_POST["phone"];


$CharacterName = $_POST["CharacterName"];
$Introduction = $_POST["Introduction"];
$Personality = $_POST["Personality"];
$Relationships = $_POST["Relationships"];
$Abilities = $_POST["Abilities"];
$Miscellaneous = $_POST["Miscellaneous"];
$Universe = $_POST["Universe"];


//create my sql Query
$constructed_query = "INSERT INTO Characters_Table (CharacterName, Universe, Introduction, Personality, Relationships, Abilities, Miscellaneous) 
VALUES ('$CharacterName', '$Universe', '$Introduction', '$Personality', '$Relationships', '$Abilities', '$Miscellaneous')";


//Execute sql Query
$result = mysqli_query($db, $constructed_query);

?>
<!--Content goes here.-->
<p>information entered</p>
<a href="Character_Profile_Edit.html">go back</a>
</body>
</html>