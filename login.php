<?php

	//get ja post muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	$signupEmailError= "";
	$signupPasswordError= "";
	
	if(isset($_POST["signupemail"])){
		
		if(empty($_POST["signupemail"])){
			
			$signupEmailError= "See vali on kohustuslik";
			
		}
	}
	
	if(isset($_POST["signuppassword"])){
		
		if(empty($_POST["signuppassword"])){
			
			$signupPasswordError= "See vali on kohustuslik";
			
		} else {
			
			//siia jouan kui parool oli olemas-isset
			//parooli ei olnud tuhi-empty
			
			if( strlen($_POST["signuppassword"]) <8 ){
			
				$signupPasswordError = "Parool peab olema vahemalt 8 tahemarki pikk";
				
			}
			
		}
	}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Logi sisse voi loo kasutaja</title>
</head>
<body>

	<h1>Logi sisse</h1>
	<form method="POST">
	
		<input name="loginemail" placeholder="Kasutaja" type="text">
		<br><br>
	
		<input name="loginpassword" placeholder="Parool" type="password">
		<br><br>
			
	
		<input type="submit" value="Logi Sisse">
		
	</form>
	
	<h1>Loo Kasutaja</h1>
	<form method="POST">
	
		<input name="signupemail" placeholder="Kasutaja" type="text"> <?php echo $signupEmailError; ?>
		<br><br>
	
		<input name="signuppassword" placeholder="Parool" type="password"> <?php echo $signupPasswordError; ?>
		<br><br>
			
	
		<input type="submit" value="Loo Kasutaja">
		
	</form>
</body>
</html>