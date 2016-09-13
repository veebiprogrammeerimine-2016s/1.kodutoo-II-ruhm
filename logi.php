<?php

	//GET ja POSTi muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	
	$signupEmailError = "";
	$signuppasswordError = "";
	
	

	//$_POST["signupEmail"]
	//ON üldse olemas see muutujad
	if(isset($_POST["signupEmail"])){
		
		//jah on olemas
		//kas on tühi
		if(empty($_POST["signupEmail"])){
			
			$signupEmailError = "see väli on kohustuslik";
		}
	}
	
	//$_POST["signuppassword"]
	
	if(isset($_POST["signuppassword"])){
		
		//jah on olemas
		//kas on tühi
		if(empty($_POST["signuppassword"])){
			
			$signuppasswordError = "parool on kohustuslik";
		}else {
			//siia jõuan siis kui parool oli 
			//olemas ja parool ei olnud tühi
			//kas parooli pikkus on väiksem kui 8
			if(strlen($_POST["signuppassword"]) < 8 ) {
				
				$signuppasswordError = "parool peab olema vähemalt 8 pikk";
				
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
	<form method = "POST">
		
		
		<label>E-post</label>
		<br>
		<input name = "loginEmail" type = "text"> 
		<br><br>
		
		<input name = "loginpassword" placeholder = "Parool" type = "password"><br><br>
		
		<input type="submit" value = "logi sisse">
	
	
	
	</form>

		<h1>Loo kasutaja</h1>
	<form method = "POST">
		
		
		<label>E-post</label>
		<br>
		<input name = "signupEmail" type = "text"> <?php echo $signupEmailError;?>
		<br><br>
		
		<input name = "signuppassword" placeholder = "Parool" type = "password"><?php echo $signuppasswordError;?><br><br>
		
		<input type="submit" value = "loo kasutaja">
	
	
	
	</form>
</body>
</html>





