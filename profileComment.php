<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Characterpedia</title>
    <script src="https://kit.fontawesome.com/3b9422a35a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="profilestyle.css">
</head>
<body>
<?php
// Check if the comment is empty
$db= mysqli_connect("studentdb-maria.gl.umbc.edu","nafisae1", "nafisae1", "nafisae1");
		
if (empty($_POST['comment']))
	{
  echo '<p style="color: red;">Please enter a comment before submitting.</p>';
  echo '<a href="profile.html">Return to Profile Page</a>';
}else{	
// Get the comment
// Show a message indicating that the comment has been sent
echo '<p style="color: green;">Your comment has been sent to the character.</p>';
echo '<a href="profile.html">Return to Profile Page</a>';
}
$comment = mysqli_real_escape_string ($db, $_POST['comment']);
$constructed_query = "INSERT INTO commentTable(comment) VALUES ('$comment')";
// Execute 
$result = mysqli_query($db,$constructed_query);

   
        ?>
		</body>
		</html>