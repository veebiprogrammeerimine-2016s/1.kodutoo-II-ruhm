<?php


	require("../../config.php");

//echo hash("sha512", "marc");


//var_dump($_GET);
//echo "<br>";
//var_dump($_POST);

$signupEmailError = "";

//kas on üldse olemas
if (isset ($_POST["signupEmail"])) {
	
	//oli olemas, ehk keegi vajutas nuppu
	//kas oli tühi
	if (empty ($_POST["signupEmail"])) {
		//oli töesti tühi
		echo "email oli tühi";
		$signupEmailError = "See väli on kohustuslik";
	}
}	
	//Muutujad
	$signupPasswordError = "";
	$signupmobilenumberError = "";
	$signupEmail= "";
	$signupGender = "";

	
	//kas on üldse olemas
if (isset ($_POST["loginPassword"])) {
	
	//oli olemas, ehk keegi vajutas nuppu
	//kas oli tühi
	if (empty ($_POST["signupEmail"])) {
		//oli töesti tühi
		echo "email oli tühi";
		$signupPasswordError = "See väli on kohustuslik";
		
		} else {
		
		//email olemas
		$signupEmail = $_POST["signupEmail"];
		
		
		//oli midagi, ei olnud tühi
		//kas pikkus vähemalt 8
		if(strlen($_POST["signupPassword"]) <8 ) {
			$singupPasswordError = "Parool peab olema vähemalt 8 tm pikk ";
		}
	}
}



//kas on üldse olemas
if (isset ($_POST["signupmobilenumber"])) {
	
	//oli olemas, ehk keegi vajutas nuppu
	//kas oli tühi
	if (empty ($_POST["signupmobilenumber"])) {
		
	$signupmobilenumber = "See väli on kohustuslik";
	echo "telefon number oli tühi";	
		
	}
}

//peab olema email ja parool
//ühtegi errorit

if ( isset($_POST["signupEmail"]) && 
		 isset($_POST["signupPassword"]) && 
		 $signupEmailError == "" && 
		 empty($signupPasswordError)
		) {
		
		
		// salvestame ab'i
		echo "Salvestan... <br>";
		
		echo "email: ".$signupEmail."<br>";
		echo "password: ".$_POST["signupPassword"]."<br>";
		
		$password = hash("sha512", $_POST["signupPassword"]);
		
		echo "password hashed: ".$password."<br>";

		//echo $serverUsername;
		
		//echo $serverUsername;
		
		//ÜHENDUS
		$database = "if16_marcraja_2";
		$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
		
		$stmt = $mysqli->prepare("INSERT INTO user_sample (email, password) VALUES (?, ?)");
		
		echo $mysqli->error;
		
		//stringina üks täht iga muutuja kohta (?), mis tüüp
		//string - s
		//integer - i 
		//float (double) - d 
		//küsimärgid asendada muutujaga
		
		$stmt->bind_param("ss", $signupEmail, $password);
		
		//täida käsku
		if($stmt->execute()) {
			echo "salvestamine õnnestus";
		} else {
			echo "ERROR ".$stmt->error;
		}
		
		
		}


?>


<!DOCTYPE html>
<html>
<head>
 <title>Sisselogimiseleht</title>
</head>
<body>

 <h1>Logi sisse</h1>
 
 <form method="POST">
 <label>E-post</label> <br>
 <input name="loginEmail" type="email">
 
 <br><br>
 <label>Password</label> <br>
 <input name="loginPassword" type="password">
 
 
 <br><br>
 
 <input type="submit">
 <form>
 
 
 <h1>Logi kasutaja</h1>
 
  <form method="POST">
  
 <label>E-post</label><br>
 <input name="signupEmail" type="email" value="<?=$signupEmail;?>"> <?=$signupEmailError; ?>
 
  <br><br>
 <label>Password</label><br>
 <input name="signupPassword" type="password"> <?php echo $signupPasswordError ?>
 
 <br><br>
 <label>Mobilenumber</label> <br>
 
 <input name="loginmobile" type="mobile"> <?php echo $signupmobilenumberError ?> <br><br>
 <?php if($signupGender == "male") { ?> 
 
<input type="radio" name="signupgender" value"male" checked> Male<br>
 <?php }else { ?>
 <input type="radio" name="signupgender" value"male"> Male<br>
 <?php } ?>	 
 
  <?php if($signupGender == "female") { ?>
	 <input type="radio" name="signupgender" value"female" checked> Female<br>
 <?php }else { ?>
 <input type="radio" name="signupgender" value"female"> female<br>
 <?php } ?>	 
 
  <?php if($signupGender == "other") { ?>
	 <input type="radio" name="signupgender" value"other" checked> other<br>
 <?php }else { ?>
 <input type="radio" name="signupgender" value"other"> other<br>
 <?php } ?>	 
	 


 
 
 <br><br>
 
 <input type="submit" value="Loo kasutaja">
 
 </form>

 
 </body>
</html>