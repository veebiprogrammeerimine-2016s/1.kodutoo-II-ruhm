<?php 
	//GET ja POSTi muutujad
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	$signupPasswordError= "";
	
	// on üldse olemas selline muutja
	if( isset( $_POST["signupEmail"] ) ){
		
		//jah on olemas
		//kas on tühi
		if( empty( $_POST["signupEmail"] ) ){
			
			$signupEmailError = "See väli on kohustuslik";
			
		}
		
	}
	if( isset( $_POST["signupPassword"] ) ){
		
		//jah on olemas
		//kas on tühi
		if( empty( $_POST["signupPassword"] ) ){
			
			$signupPasswordError = "See väli on kohustuslik";
			
		} else {
		
			// siia jouan siis kui parool oli olemas - isset
			// parool ei olnud tuhi /empty
			
			// kas parooli pikkus on vaiksem kui 8
			if ( strlen($_POST["signupPassword"]) <8 ) {
				
				$signupPasswordError = "Parool peab olema vahemalt 8 tahemarki pikk";
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
		
		<label>E-post</label>
		<br>
		
		<input name="signupEmail" type="text"> <?php echo $signupEmailError; ?>
		<br><br>
	
		
		<input type="password" name="signupPassword" placeholder="Parool"> <?php echo $signupPasswordError; ?>
		<br><br>
		
		<input type="submit" value="Loo kasutaja">
		
		<select name="age">
		<option value="male">Male</option>
		<option value="female">Female</option>
		<option value="other">Other</option>
		</select>
		
		
	</form>

</body>
</html>