Ei osanud selle soov valiku lahtri juurde seda ERRORIT lisada
MVP idee: Eesti aktsiaturu uudiste sait, kuhu on kokku koondatud kõik kohalikku börssi puututavad uudised.


<?php
	
	//MUUTUJAD
	$signupEmailError = "";
	$signupPasswordError = "";
	$signupUsername = "";
	$signupUsernameError = "";
	$signupGender = "";
	$signupGenderError = "";
	
	
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
		
	if(isset($_POST["signupUsername"])){
		
		if(empty($_POST["signupUsername"])){
			
			$signupUsernameError = "Palun vali kasutajanimi!";
		}
	}
	
	if( isset( $_POST["signupGender"] ) ){
		
		if(!empty( $_POST["signupGender"] ) ){
		
			$signupGender = $_POST["signupGender"];
			
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
				
		<input name="signupUsername" type="text" placeholder="Kasutajanimi" > <?php echo $signupUsernameError; ?> 
		<br><br>
		
		<?php if($signupGender == "mees") { ?>
			<input type="radio" name="signupGender" value="mees" checked> Mees<br>
		<?php }else { ?>
			<input type="radio" name="signupGender" value="mees"> Mees<br>
		<?php } ?>
		
		<?php if($signupGender == "naine") { ?>
			<input type="radio" name="signupGender" value="naine" checked> Naine<br>
		<?php }else { ?>
			<input type="radio" name="signupGender" value="naine"> Naine<br>
		<?php } ?>
		
		<?php if($signupGender == "muu") { ?>
			<input type="radio" name="signupGender" value="muu" checked> Muu<br>
		<?php }else { ?>
			<input type="radio" name="signupGender" value="muu"> Muu<br>
		<?php } ?>
		<br>
		
		<input type="submit" value="Loo kasutaja">
		<br><br>
	
	
	</form>

</body>
</html>
