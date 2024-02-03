<?php
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "nafisae1", "nafisae1", "nafisae1");

$name = $_POST['name'];
$about = $_POST['about'];
if (empty($name) || empty($about)){
  echo "<p style='color: red;'> Please fill out before saving.</p>";
  echo '<a href="profileEdit.html">Return to Profile Edit Page</a>';
}
  else {
    // Validation successful
    echo "<p style='color: green;'>Your profile has been updated.</p>";
	echo '<a href="profileEdit.html">Return to Profile Edit Page</a>';
  }
$constructed_query = "INSERT INTO profile_Table (Name, About) 
VALUES ('$name','$about')";

$result = mysqli_query($db, $constructed_query);

?>
