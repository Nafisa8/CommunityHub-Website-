<?php
	//session starts and a connection to mysql is made
	session_start();
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "nafisae1", "nafisae1", "nafisae1");
	
	if (mysqli_connect_errno()) {
		exit("Error - Could not connect to MySQL");
	}
	
?>	
<!DOCTYPE html>
<html lang="EN">
<head>
<title>CharacterPedia Login</title>
<link rel="stylesheet" type="text/css" href="login_style.css" />
</head>
<body>
<?php
	
	//if login button is pressed then set variables and protect against html and sql injections
	if(isset($_POST["login"])) {
		$username = htmlspecialchars($_POST["uname"]);
		$password = htmlspecialchars($_POST["password"]);
		
		$username = mysqli_real_escape_string($db, $username);
		$password = mysqli_real_escape_string($db, $password);
		
		
			
		//if username and password fields are not empty, then check to ensure data exists in mysql
		$constructed_query = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($db, $constructed_query);
				
		//check if any rows were returned and set the session and confirm to user they are logged in
		if(mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
					
				if($row['username'] === $username && $row['password'] === $password) {

					?>
				
					<p> Welcome back. Click <a href="Characterpedia_Search_.html">here</a> to start! </p>
						
					<?php
					$_SESSION["user"] = $username;

				}
				//else if no rows were returned then wrong login info
		}
		else {
		?>
			<p> Invalid username and/or password. Please <a href="CharacterPediaLogin.html">go back</a> and sign-up or use correct password.</p>
			<?php
		}
				
	}
	//if signup is clicked then it adds sets variables and protects from html and sql injections
	elseif(isset($_POST["signup"])) {
		$username = htmlspecialchars($_POST["uname"]);
		$password = htmlspecialchars($_POST["password"]);
		
		$username = mysqli_real_escape_string($db, $username);
		$password = mysqli_real_escape_string($db, $password);
		
		//these variables ensure that data already exists
		$query_exists = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
		$result_exists = mysqli_query($db, $query_exists);
		
		//these variables check if username already exists
		$username_exists = "SELECT * FROM Users WHERE username = '$username'";
		$username_result = mysqli_query($db, $username_exists);
		
		//if username and password does exist then it does not add to sql database to avoid similar accounts
		if (mysqli_num_rows($result_exists) === 1) {
			
			?>
			<p> You already have an account. Please <a href="CharacterPediaLogin.html">go back</a> and login</p>
			
			<?php
		}
		//if username already exists then it does not add to sql database to ensure unique usernames.
		elseif (mysqli_num_rows($username_result) === 1) {
			
			?>
			<p> Username already exists. Please <a href="CharacterPediaLogin.html">go back</a> and change your username.</p>
			
			<?php
		}
		
		//else if fields are filled and password matches format, then insert data to database to create account
		elseif ((!empty($username)) && (!empty($password)) && (preg_match("/^[A-Za-z]{5,}\d$/" ,$password))) {
			$constructed_query = "INSERT into Users(username, password) values ('$username', '$password')";
			
			$result = mysqli_query($db, $constructed_query);
			
			//if everything is checked then set session variable and inform user of successful sign up
			if($result) {
				$_SESSION["user"] = $_POST["uname"];
		
				?>
					
				<p> Thanks for signing up! Welcome to CharacterPedia. Click <a href="Characterpedia_Search_.html">here</a> to start! </p>
			
			<?php
			}
		}
		
		//else if checks are not met then inform user to try again with correct format
		else{
			?>
			<p> Invalid username or password. Please <a href="CharacterPediaLogin.html">go back</a> and try again.  </p>
			<p> Password Format: Must start with 5 letters. Must end with digit. Maximum 10 characters.
			
			<?php
		}
			
	}
			?>
</html>
</body>