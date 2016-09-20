<?php

	//GET ja POST muutjuad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	$signupEmailError = "";
	$signupPasswordError = "";
	
	
	//on üldse olemas selline muutuja
	if(isset($_POST["signupEmail"])){
		
		//jah on olemas
		//kas on tühi
		if(empty($_POST["signupEmail"])){
			
			$signupEmailError = "See väli on kohustuslik";
		}
	}
	
	
		if(isset($_POST["signupPassword"])){
			
			
			if(empty($_POST["signupPassword"])){
				
				$signupPasswordError = "Parool on kohustuslik";
			} else {
				
				//siia jõuan siis, kui parool oli olemas -isset
				//parool ei olnud tühi -empty
				
				//kas parooli pikkus on väiksem kui 8
				if(strlen($_POST["signupPassword"]) < 8)  {
					
					$signupPasswordError = "Parool peab vähemalt 8 tähemärki pikk olema";
				
				
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
	
		<input name="loginPassword" placeholder="Parool" type="password">
		<br><br>
		
		<input type="submit" value="Logi sisse">
	
	
	</form>
	
	<h1>Loo kasutaja</h1>
	<form method="POST">
		
		
		<input name="signupEmail" type="text" placeholder="E-post"> <?php echo $signupEmailError; ?>
		<br><br>
	
		<input name="signupPassword" placeholder="Parool" type="password"> <?php echo $signupPasswordError; ?>
		<br><br>
		
		<input name="signupUsername" type="text" placeholder="Kasutajanimi*"> 
		<br><br>
		
		<input type="submit" value="Loo kasutaja">
		
		<?php echo "* - pole kohustuslik" ?>
	
	
	</form>

</body>
</html>