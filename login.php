<?php

	//MVP idee v�iks olla oma rahalise seisu j�lgimise app. N�iteks nagu on My Budget Book. 
	//Sinna saad m�rkida mis on sinu sissetulekud ja v�ljaminekud. Eraldi saad veel m�rkida palju kuus millegi peale kulub.


	//GET ja POSTi muutujad
	
	//var_dump ($_GET);
	//echo '<BR>';
	//var_dump ($_POST);
	
	$signupEmailError = "";
	$SignupPasswordError = '';
	$SignupFirstNameError = '';
	$SignupSecondNameError = '';
	$SignupUserNameError = '';
	
	// on �ldse olemas selline muutja
		if( isset( $_POST["signupEmail"] ) ){
		
		//jah on olemas
		//kas on t�hi
		if( empty( $_POST["signupEmail"] ) ){
			
			$signupEmailError = "E-post on kohustuslik";
			
		}
		
	}
		if( isset( $_POST["signupPassword"] ) ){
		
		if( empty( $_POST["signupPassword"] ) ){
			
			$SignupPasswordError = "Parool on kohustuslik";
			
		}else{
			
			//siia j�uan siis kui parool oli olemas -isset
			//parool ei olnud t�hi -empty
			
			if (strlen($_POST['signupPassword'])<8){
				
				$SignupPasswordError = 'Parool peab olema v�hemalt 8 t�hem�rki pikk';
		}
			
			
	}
	    if( isset( $_POST["firstname"] ) ){
		

		if( empty( $_POST["firstname"] ) ){
			
			$SignupFirstNameError = "Eesnimi on kohustuslik";
		}
			
			
	}
	    if( isset( $_POST["secondname"] ) ){
		

		if( empty( $_POST["secondname"] ) ){
			
			$SignupSecondNameError = "Perekonnanimi on kohustuslik";
		
		}
			
			
	}
	    if( isset( $_POST["username"] ) ){
		

		if( empty( $_POST["username"] ) ){
			
			$SignupUserNameError = "Kasutajanimi on kohustuslik";
					
	
		}
		
	}
	
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1 style="color:blue;">Logi sisse</h1>
	<form method="POST">
		
		<label style="color:blue;">Kasutajanimi</label>
		<br>
		
		<input name="loginEmail" type="text">
		<br><br>
		<label style="color:blue;">Parool</label>
		<br>
		<input type="password" name="loginPassword">
		<br><br>
		
		<input type="submit" value="Logi sisse">

	</form>

<h1>Loo kasutaja</h1>

<form method="POST">
		
		<input name="username" name="text" placeholder="kasutajanimi"> <?php echo $SignupUserNameError; ?>
		<br><br>
		
		<input name="firstname" type="text" placeholder="Eesnimi"> <?php echo $SignupFirstNameError; ?>
		<br><br>
		
		<input name="secondname" type="text" placeholder="Perekonnanimi"> <?php echo $SignupSecondNameError; ?>
		<br><br>
		
		<input name="signupEmail" type="text" placeholder="E-post"> <?php echo $signupEmailError; ?>
		<br><br>
		
		<input type="password" name="signupPassword" placeholder="Parool"> <?php echo $SignupPasswordError; ?>
		<br><br>
		
		<input type="radio" name="gender" value="male"> Mees<br>
		<input type="radio" name="gender" value="female"> Naine
		<br><br>
		
		
		<input type="submit" value="Loo kasutaja">
		
		
	</form>

</body>
</html>