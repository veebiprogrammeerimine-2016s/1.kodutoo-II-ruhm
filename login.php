<?php 
	//GET ja POSTi muutujad
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	// on üldse olemas selline muutja
	if( isset( $_POST["signupEmail"] ) ){
		
		//jah on olemas
		//kas on tühi
		if( empty( $_POST["signupEmail"] ) ){
			
			$signupEmailError = "See väli on kohustuslik";
			
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logi sisse või loo kasutaja</title>
</head>
<body>

	<h1>Logi sisse</h1>
	<form method="POST">
		
		<label>E-post</label>
		<br>
		
		<input name="loginEmail" type="text">
		<br><br>
		
		<input type="password" name="loginPassword" placeholder="Parool">
		<br><br>
		
		<input type="submit" value="Logi sisse">
		
		
	</form>
	
	
	<h1>Loo kasutaja</h1>
	<form method="POST">
		
		<label>E-post</label>
		<br>
		
		<input name="signupEmail" type="text"> <?php echo $signupEmailError; ?><br><br>
		
		<input type="password" name="signupPassword" placeholder="Parool"><br><br>

		<input name="signupFirstName" placeholder="Eesnimi"><br><br>
		
		<input name="signupLastName" placeholder="Perekonnanimi"><br><br>

		<input name="signupSecurityQuestion" placeholder="Turvaküsimus"><br>
		<input name="signupSecurityAnswer" type="password" placeholder="Vastus"><br><br>
		
		<input type="radio" name="gender" value="Mees"> Mees<br>
		<input type="radio" name="gender" value="Ńaine"> Naine<br>
		<input type="radio" name="gender" value="Ründehelikopter"> Ründehelikopter<br><br>

		<input type="submit" value="Loo kasutaja">
		
		
	</form>

</body>
</html>