<html>
<head>
	<title>ifeleseif</title>
</head>
<body>
<form action=<?php echo htmlentities($_SERVER["PHP_SELF"]);?> method="POST">
	<fieldset>
	<legend>Personal Information</legend>
	First Name: <br>
	<input type="text" name="firstname"><br>
	Last Name: <br>
	<input type="text" name="lastname"><br>
	Gender: <br>
	<input type="radio" name="gender" value="male"> Male<br>
  	<input type="radio" name="gender" value="female">Female<br>
  	<input type="radio" name="gender" value="other">Others<br>
  	<input type="submit" value="submit" name="submit">
	</fieldset>
</form>

<?php

if(isset($_POST["submit"])){
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$gender = $_POST["gender"];
	$violation = 0;

	if(empty($firstname)){
		echo "Please enter first name!";
		echo "<br>";
		$violation += 1;
	}elseif(1==preg_match("~[0-9]~", $firstname)){
		echo "Please enter valid last name!";
		echo "<br>";
		$violation += 1;
	}

	if(empty($lastname)){
		echo "Please enter last name!";
		echo "<br>";
		$violation += 1;
	}elseif(1==preg_match("~[0-9]~", $lastname)){
		echo "Please enter valid last name!";
		echo "<br>";
		$violation += 1;
	}
	if(empty($gender)){
		echo "Please select gender!";
		echo "<br>";
		$violation += 1;
	}

		if($violation == 0){
			echo $firstname;
			echo "<br>";
			echo $lastname;
			echo "<br>";
			echo $gender;
		}
}

?>
</body>
</html>