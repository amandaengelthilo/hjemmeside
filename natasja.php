<?php
	
	
	//Man kan ikke åbne php i en browser
	//$ er en variabel i php
	//I php bruges _ til at dele ordene. I jQuery er det camelcase
	
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	//php comment 
	//isset — Undersøger om variablen er sat og ikke sat til ingenting
			
	$firstname = "";
	if (isset($_GET['firstname'])){
		$firstname = $_GET['firstname'];	
	}
	$lastname = "";
	if (isset($_GET['lastname'])){
		$lastname = $_GET['lastname'];	
	}
	
	$gender = "";
	if (isset($_GET['gender'])){
		$gender = $_GET['gender'];
	}
	
	// . (concatinate) er med til at lave mellemrum ml ordene
	$fullname = $firstname . " " . $lastname;
	
?>
<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Dag 4 php</title> 
</head>

<body>
	<!--"Action" beskriver hvilken side, det skal sendes hen til. Hvis der ikke står noget i action, sendes man hen til samme side-->
	<!-- get-method kan ses i URL'en. Viser URL-variablerne-->
	
	<form action="dag4.php" method="get">
		<label for="firstname">Fornavn: </label><input type="text" name="firstname" id="firstname" required><br>
		<label for="lastname">Efternavn: </label><input type="text" name="lastname" id="lastname" required><br>
		
		<label for="female">Kvinde: </label><input type="radio" name="gender" id="gender" value="kvinde" required><br>
		<label for="male">Mand: </label><input type="radio" name="gender" id="gender" value="mand" required><br>

		<input type="submit" value="Send">
	</form>
	<!--html comment -->
	
	<?php
		//Dette udskrives på siden
		echo ("Dette er dit navn:" . " " . $fullname . ". " . "Du er en:" . " " . $gender);
		
	?>
	
	
</body>
</html>