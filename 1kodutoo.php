<?php

	//GET ja POSTi muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	/***********************************************************************************
		MPV idee - Päevikupõhine veebileht. Mõtlesin, et 
		toitumisalane ja treeningupõhine kokku lõimitud. Sisaldaks kuupäeva, söödud
		toidu nime ja selles olevate kalorite arvu, saab teha nädala kokkuvõtteid. 
		Samamoodi vaadata ja lisada kuupäevadel tehtud treeningharjutusi
	***********************************************************************************************/
	
	
	$signupEmailError = "";
	$signuppasswordError = "";
	$signuppassworduuestiError = "";
	$signupFirstNameError = "";
	$signupLastNameError = "";
	$signupGenderError = "";
	
	//$_POST["signupEmail"]
	//ON üldse olemas see muutujad
	if(isset($_POST["signupEmail"])){
		
		//jah on olemas
		//kas on tühi
		if(empty($_POST["signupEmail"])){
			
			$signupEmailError = "see väli on kohustuslik";
		}
	}
	
	//eesnime kontroll
	if(isset($_POST["signupFirstName"])){
		if(empty($_POST["signupFirstName"])){
			$signupFirstNameError = "See väli on kohustuslik";
		}
	}
	
	//perenime kontroll
	if(isset($_POST["signupLastName"])){
		if(empty($_POST["signupLastName"])){
			$signupLastNameError = "See väli on ka kohustuslik";
		}
	}
		
	//$_POST["signuppassword"]
	
	if(isset($_POST["signuppassword"])){
		
		//jah on olemas, kas on tühi
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
		//parooli kattuvus
	if(isset($_POST["signuppassworduuesti"])){
		
		if(empty($_POST["signuppassworduuesti"])){
				$signuppassworduuestiError = "parool on kohustuslik";	
		}else{
				if($_POST["signuppassword"] != $_POST["signuppassworduuesti"]){
				$signuppassworduuestiError = "Ei kattu";
			}
		}
	}
	//gender kontroll
	if(isset($_POST["signupGender"])){
		if(empty($_POST["signupGender"])){
			$signupGenderError = "See väli on kohustuslik";
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
		<input name = "loginEmail" type = "text" placeholder= "E-post"> 

		<input name = "loginpassword" placeholder = "Parool" type = "password"><br><br>
		
		<input type="submit" value = "logi sisse">
	
	
	
	</form>

		<h1>Loo kasutaja</h1>
	<form method = "POST">
		
		
		<label>E-post</label>
		<br>
		<input name = "signupEmail" type = "text" placeholder = "E-post"> <?php echo $signupEmailError;?>
		<br><br>
		<input name = "signuppassword" placeholder = "Parool" type = "password"><?php echo $signuppasswordError;?>
		<input name = "signuppassworduuesti" placeholder = "Parool uuesti" type = "password"><?php echo $signuppassworduuestiError;?><br><br>
		<input type = "text" placeholder = "Eesnimi" name="signupFirstName"> <?php echo $signupFirstNameError; ?>
		<input type = "text" placeholder = "Perenimi" name="signupLastName"> <?php echo $signupLastNameError; ?>
		<br></br>
		<input type = "signupGender" type = "text" placeholder = "Sugu"><?php echo $signupGenderError;?>
		<br></br>
		<input type="submit" value = "loo kasutaja">
		
	
	</form>
</body>
</html>





