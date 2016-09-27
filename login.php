<?php

	//GET ja POST muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	$signupEmailError = "";
	$signupPasswordError = "";
	
	// on üldse olemas selline muutuja
	if( isset( $_POST["signupEmail"] ) ) {
			//jah on olemas
			//kas on tühi
			if(empty( $_POST["signupEmail"] ) ) {
					
					$signupEmailError = "see väli on kohustuslik";
			}
	}

	if( isset( $_POST["signupPassword"] ) ) {
			
			if(empty( $_POST["signupPassword"] ) ) {
					
					$signupPasswordError = "see väli on kohustuslik";
					
			} else {
				//siia jõuan siis kui parool oli olemas isset
				// parool ei olnud tühi empty
				
				if ( strlen($_POST["signupPassword"]) < 8 ) {
					
					$signupPasswordError = "Parool peab olema vähemalt 8 tähemärkki pikk";
					
				}
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
	
		<label>E-post</label><br>
		
		<input name="loginEmail" type="text">
		<br><br>
		
		<input name="loginPassword" placeholder="Parool" type="password">
		<br><br>
		
		<input type="submit" value="Logi sisse">
	
	</form>


<h1>Loo kasutaja</h1>
	<form method="POST"> 
	
		<label>E-post</label><br>
		
		<input name="signupEmail" type="text"> <?php echo $signupEmailError; ?>
		<br><br>
		
		<input type="password" placeholder="Parool" name="signupPassword"> <?php echo $signupPasswordError; ?>
		<br><br>
		
		<input type="submit" value="Loo kasutaja">
	
	</form>
	
</body>
</html>