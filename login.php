<?php

	// GET ja POSTi muutujad
	//var_dump ($_GET);
	//echo"<br>";
	//var_dump ($_post);
	
	$signupEmailError = "";
	$signupPasswordError = "";
	
	
	if( isset($_POST["signupEmail"] )){
		
		//Jah, on olemas
		//kas on tühi
		
		if( empty($_POST["signupEmail"])) {
			
			$signupEmailError = "see väli on kohustuslik";
	
			
			
		}
	}
	
	
	
	if( isset($_POST["signupPassword"])) {
		
		if( empty($_POST["signupPassword"])) {
			
			$signupPasswordError = "see väli on kohustuslik";	
		}else{
		//Siia jõuan siis, kui parool oli olemas ja parool, ei olnud tühi. !ELSE!
			if(strlen($_POST["signupPassword"])<8) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 märki pikk";
			}
			
			
		
		
	}
	}


?>



<!DOCTYPE html>
<html>
<head>
<title>´Logi sisse või loo kasutaja</title>
</head>
<body>

<h1>Logi sisse</h1>



	<form method=POST> 

	<label>E-post:<label><br>
	
		<input name=loginEmail type="text">

	<br><br>   
	
	
		<input name=loginPassword placeholder="parool" type="password">
	<br>
	
		<input type="submit" value="Kinnita">
	<br><br>
	



	</form>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
<title>´Logi sisse või loo kasutaja</title>
</head>
<body>

<h1>Logi sisse</h1>



	<form method=POST> 

	<label>E-post:<label><br>
	
		<input name=signupEmail type="text"> <?php echo $signupEmailError;  ?>

	<br><br>   
	
	
		<input name=signupPassword placeholder="parool" type="password"> <?php echo $signupPasswordError; ?>
		
	<br>
	
		<input type="submit" value="Logi sisse">
	<br><br>
	



	</form>

</body>
</html>