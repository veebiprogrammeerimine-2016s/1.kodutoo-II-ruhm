<?php

	//GET ja POSTi muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);

	//$_POST["signupEmail"]
	
	$signupEmailError = "";
	
	// on üldse olemas selline muutuja
	if(isset( $_POST["signupEmail"] ) ) {
		
		//jah on olemas
		//kas on tühi
		if( empty( $_POST["signupEmail"] ) ){
			
			$signupEmailError = "see väli on kohustuslik";
			
		}
		
	}
	
	if(isset( $_POST["signupPassword"] ) ){
		
		if( empty( $_POST["signupPassword"] ) ){
			
			$signupPasswordError = "parool on kohustuslik";
			
			
			
		} else {
			
			// siia jõuan siis kui parool oli olemas - isset
			// parool ei olnud tühi - empty
			
			//kas parooli pikkus on väiksem kui 8
			if ( strlen($_POST["signupPassword"]) < 8  ) {
				
				$signupPasswordError = "parool peab olema vähemalt 8 tähemärki pikk";
				
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

	<label>E-post</label><br>
	
	<input name="signupEmail" type="text"> <?php echo $signupEmailError; ?>
	<br><br>
	
	<label>Parool</label><br>
	<input type="password" name="signupPassword" placeholder="Parool">
	
	<br>
	<input type="submit" value="Loo kasutaja">

</form>


</body>
</html>