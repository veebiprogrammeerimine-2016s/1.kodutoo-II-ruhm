<?php

	//get ja post muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	$signupEmailError= "";
	$signupPasswordError= "";
	$reenterpasswordError= "";
	$genderError= "";
	
	if(isset($_POST["signupemail"])){
		
		if(empty($_POST["signupemail"])){
			
			$signupEmailError= "See vali on kohustuslik";
			
		}
	}
	
	if(isset($_POST["signuppassword"])){
		
		if(empty($_POST["signuppassword"])){
			
			$signupPasswordError= "See vali on kohustuslik";
			
		} else {
			
			if( strlen($_POST["signuppassword"]) <8 ){
			
				$signupPasswordError = "Parool peab olema vahemalt 8 tahemarki pikk";
				
			}
		}
	}
	
	if(isset($_POST["reenterpassword"])){
		
		if($_POST["reenterpassword"] == $_POST["signuppassword"]){
			
			$reenterpasswordError= "";
			
		} else {
			
			$reenterpasswordError= "Parool ei olnud sama";
			
		}
	}
	
	//if(isset($_POST["genderm"])){
		
		//if($_POST["genderm"] == $_POST["genderf"]){
			
			//$genderError= "";
			
		//}else{
			
			//$genderError= "Vali sugu";
			
		//}
	//}
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
	Tärniga väljad on kohustuslikud
	<form method="POST">
	
		<br>
		<b><label>*E-mail:</label></b><br>
		<input name="signupemail" placeholder="example@mail.com" type="text"> <?php echo $signupEmailError; ?>
		<br><br>
	
		<b><label>*Parool:</label></b><br>
		<input name="signuppassword" placeholder="********" type="password"> <?php echo $signupPasswordError; ?>
		<br><br>
		
		<b><label>*Sisesta parool uuesti:</label></b><br>
		<input name="reenterpassword" placeholder="********" type="password"> <?php echo $reenterpasswordError; ?>
		<br><br>
		
		<b><label>*Sugu:</label></b> <?php echo $genderError; ?><br>
		<input name="genderm" type="radio"> Mees<br>
		<input name="genderf" type="radio"> Naine<br>
		<input name="gendero" type="radio"> Muu
		<br><br>
		
		<b><label>*Sunnikuupaev:</label></b><br>
		<input name="bday" type="date" max="2016-01-01" min="1900-01-01">
		<br><br>
		
		<b><label>Riik:</label></b><br>
		<input name="country" type="text">
		<br><br>
		
		<b><label>Linn:</label></b><br>
		<input name="city" type="text">
		<br><br>
		
		<b><label>Telefoni number:</label></b><br>
		<input name="usrtel" type="tel">
		<br><br>
		
		<input name="spam" type="checkbox"> Soovin saada spammi oma meilile
		<br><br>
		
		<input type="submit" value="Loo Kasutaja">
		
		
		<br><br><br><br>
		Ma veel kindel ei ole aga voibolla midagi blogi ja treeningpaeviku laadset. Lugeda saavad ainult kasutajad.
	</form>
</body>
</html>