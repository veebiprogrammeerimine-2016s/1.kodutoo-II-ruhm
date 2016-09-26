<?php
	//GET ja POSTI muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	$signupEmailError = "";
	$signupPasswordError = "";
	$passwordAgainError = "";
	$signupNameError = "";
	$gender = "";
	$name = "";
	
	
	
	//nime kontroll
	if( isset($_POST["signupName"]) ){
		if( empty($_POST["signupName"]) ){
			$signupNameError = "See väli on kohustuslik";	
		} else {
		$name = $_POST["signupName"];
		}
	}
	
	
	// emaili kontroll
	if( isset($_POST["signupEmail"]) ){
		if( empty($_POST["signupEmail"]) ){
			$signupEmailError = "See väli on kohustuslik";
			
		} else {
			$email = $_POST["signupEmail"];
		}
	}
	
	// parooli kontroll
	if( isset($_POST["signupPassword"]) ){
		
		if( empty($_POST["signupPassword"]) ){
			$signupPasswordError = "Parool on kohustuslik";
			
		}else{
			//kui parool oli ja polnud tühi   ...isset ja empty
			if (strlen ($_POST["signupPassword"]) < 8){
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk";
			}
			
		}
	}
	
	// kas paroolid klappuvad
	if(isset($_POST["passwordAgain"])) {
		
		if( empty($_POST["passwordAgain"]) ){
			$passwordAgainError = "Sisestage parool uuesti";
		}else{
			if($_POST["signupPassword"] != $_POST["passwordAgain"]) {
			$passwordAgainError = "Sisestatud salasõnad ei kattu!";
			}
		}
	}
	
	if(isset($_POST["gender"])){
		if(!empty($_POST["gender"])){            
			$gender = $_POST["gender"];
		}
	}

	
		// ühtegi errorit
	
if( isset($_POST["signupName"]) &&
	empty($signupNameError) &&
	empty($signupPasswordError) &&
	empty($passwordAgainError) &&
	empty($signupEmailError) ) {
		
// salvestame 
	echo "Salvestan... <br>";
	echo "Nimi: ". $name . "<br>";	
	echo "E-post: ". $email . "<br>";
	echo "Sugu: " . $gender . "<br>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Logi sisse</title>
</head>

<body>

<h1>Logi sisse</h1>

<form method="POST">
    
	<input type="text" placeholder="E-post" name="loginEmail"><br><br>
	
	<input type="password" placeholder="Parool" name="loginPassword"><br><br>
	<input type="submit" value="Logi sisse">
</form>

<h1>Loo kasutaja</h1>

<form method="POST">
    <input type="text" placeholder="Ees- ja perekonnanimi" name="signupName"> <?php echo $signupNameError; ?><br><br>
	<input type="text" placeholder="E-post" name="signupEmail"> <?php echo $signupEmailError; ?><br><br>
	<input type="password" placeholder="Parool" name="signupPassword"> <?php echo $signupPasswordError; ?><br><br>
	<input type="password" placeholder="Parool uuesti" name="passwordAgain"> <?php echo $passwordAgainError; ?><br><br>
	
	<?php if($gender == "female"){ ?>
Naine<input name="gender" type="radio" value="female" checked >
<br>
<?php } else { ?>
Naine<input name="gender" type="radio" value="female">
<br>
<?php } ?>
<?php if($gender == "male"){ ?>
Mees<input name="gender" type="radio" value="male" checked >
<br>
<?php } else { ?>
Mees<input name="gender" type="radio" value="male">
<br>
<?php } ?>

<?php if($gender == "" || $gender == "none"){ ?>
Määramata<input name="gender" type="radio" value="määramata" checked>
<?php } else {?>
Määramata<input name="gender" type="radio" value="määramata">
<?php } ?>
<br>
<br>
	<input type="submit" value="Loo kasutaja">
</form>
</body>
</html>


