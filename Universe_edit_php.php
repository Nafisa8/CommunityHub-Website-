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

$UniverseName = $_POST["UniverseName"];
$Introduction = $_POST["Introduction"];
$Plot = $_POST["Plot"];
$Characters = $_POST["Characters"];
$Lore = $_POST["Lore"];
$History = $_POST["History"];
$Author = $_POST["Author"];
$Miscellaneous = $_POST["Miscellaneous"];

//create my sql Query
$constructed_query = "INSERT INTO Universe_Table(UniverseName, Introduction, Plot, Lore, Characters, Author, History, Miscellaneous) 
VALUES ('$UniverseName', '$Introduction', '$Plot', '$Lore', '$Characters', '$Author', '$History', '$Miscellaneous')";


//Execute sql Query
$result = mysqli_query($db, $constructed_query);

?>
<!--Content goes here.-->
<p>information entered</p>
<a href="Universe_Profile_Edit.html">go back</a>
</body>
</html>