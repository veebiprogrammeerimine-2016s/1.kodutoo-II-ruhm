<?php

	// GET ja POSTi muutujad
	//var_dump ($_GET);
	//echo"<br>";
	//var_dump ($_post);

	$signupEmailError = "";
	$signupPasswordError = "";
	$registerEmailError = "";
	$registerPasswordError ="";
	$personalError="";


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

	if( isset($_POST["registerEmail"] )){

		//Jah, on olemas
		//kas on tühi

		if( empty($_POST["registerEmail"])) {

			$registerEmailError = "e-mail on kohustuslik";



		}
	}



if( isset($_POST["registerPassword"] )){

		//Jah, on olemas
		//kas on tühi

		if( empty($_POST["registerPassword"])) {

			$registerEmailError = "parool on kohustuslik";

             if(strlen($_POST["registerPassword"])<8) {

				$registerPasswordError = "Parool peab olema vähemalt 8 märki pikk";
			}

		}
	}

	if(isset($POST["personal"])){
		
		if(empty($POST[personal])) {
		
		$personalError = "Kirjuta midagi enda kohta";
		
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



		<input name=signupEmail placeholder="e-mail" type="text"> <?php echo $signupEmailError;  ?>

	<br><br>


		<input name=signupPassword placeholder="parool" type="password"> <?php echo $signupPasswordError; ?>

	<br>

		<input type="submit" value="Logi sisse">
	<br><br>




	</form>

	
	<h2>Loo kasutaja</h2>

	<?php echo $registerEmailError;?>
	<?php echo $registerPasswordError;?>
	<?php echo $personalError;?>

	<form method=post>

	<input type=text  name=registerEmail  placeholder="Sisesta meiliaadress" > <br><br>

	<input type=password name=registerPassword  placeholder="Vali parool" > <br><br>
	
	<input type=radio name=sex value=male>Mees
	<input type=radio name=sex value=female>Naine
	<input type=radio name=sex value=othersex>Other<br><br>
	
	 Kirjuta enda kohta midagi huvitavat<br>
	<input type=text name=personal placeholder="Kirjuta midagi enda kohta" size=50> <br><br>
	
	
	<input type="submit" value="Kinnitan">



	</form>
	

	


	



</body>
</html>