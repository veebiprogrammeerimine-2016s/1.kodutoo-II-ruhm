<?php
//GET ja POST muutujad
//var_dump($_GET);
//echo "<br>";
//var_dump($_POST);

$signupEmailError = ""; 
$signupPasswordError="";



//on üldse olemas selline muutuja
if(isset($_POST["signupEmail"]))
{
// jah on olemas

// kas on tühi?
	if(empty($_POST["signupEmail"]))
	{
		$signupEmailError = "See väli on kohustuslik";
	}
}

//on üldse olemas selline muutuja
if(isset($_POST["singupPassword"]))
{
// jah on olemas
	
// kas on tühi?
	if(empty($_POST["singupPassword"]))
	{
		$signupPasswordError = "Parool väli on kohustuslik";
	}
	else 
	{
		// siia juuan siis kui parool on olemas - isset
		// ja parool ei olnud tühi - empty
		
		// kas parooli pikkus on väiksem kui 8
		if(strlen($_POST["singupPassword"]) < 8)
		{
			$signupPasswordError = "Parool peab olema vähemalt 8 tähepikk";
		}
	}
}



?>

<!DOCTYPE html>
<html>
<title>Logi sisse või loo kasutaja</title>
<body>

<h1>Logi sisse</h1>
<form method="POST">
	<input name="loginEmail" placeholder="E-mail" type="text"><br><br>
	<input name="loginPassword" placeholder="Parool" type="password"><br><br>
	
	<input type="submit" value="Logi sisse">
</form>

<h1>Loo kasutaja</h1>
<form method="POST">
	<input name="signupEmail" placeholder="E-mail" type="text"> <?php echo $signupEmailError; ?>
	<br><br>
	<input name="singupPassword" placeholder="Parool" type="password"> <?php echo $signupPasswordError; ?>
	<br><br>	
	<input type="submit" value="Loo kasutaja">
</form>

</body>
</html>
