<?php 
	//GET ja POSTi muutujad
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	// on üldse olemas selline muutja
	if( isset( $_POST["signupEmail"] ) ){
		
		//jah on olemas
		//kas on tühi
		if( empty( $_POST["signupEmail"] ) ){
			
			$signupEmailError = "See väli on kohustuslik";
			
		}else {
 		
//oli midagi, ei olnud tühi
//kas pikkus vähemalt 8
if(strlen($_POST["signupPassword"]) <8 ) {
$singupPasswordError = "Parool peab olema vähemalt 8 tm pikk ";
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
	<form method="POST">
		
		<label>E-post</label>
		<br>
		
		<input name="loginEmail" type="text">
		<br><br>
		
		<input type="password" name="loginPassword" placeholder="Parool">
		<br><br>
		
		<input type="submit" value="Logi sisse">
		
		
	</form>
	
	
	<h1>Loo kasutaja</h1>
	<form method="POST">
		
		<label>E-post</label>
		<br>
		
		<input name="signupEmail" type="text"> <?php echo $signupEmailError; ?>
		
		<br><br>
		
		<input type="password" name="signupPassword" placeholder="Parool">
		
		<br><br>
		
        <form>
		Sugu:<br>
		<input type="radio" name="sugu" value="mees" checked> Mees<br>
		<input type="radio" name="sugu" value="naine"> Naine<br>
		<input type="radio" name="sugu" value="muu"> Muu
		</form>

		<br>
		
		<form>
		SÃ¼nnipÃ¤ev:<br>
		<input type="date" name="sÃ¼nnipÃ¤ev" max="2006-12-31">
		<br><br>
		
		<form>
		Keel:<br>
		<select name="keel">
		<option value="eesti keel">eesti keel</option>
		<option value="vene keel">vene keel</option>
		<option value="inglise keel">inglise keel</option>
		</select>
		<br><br>
		
		<input type="submit" value="Loo kasutaja">
		
		
		
	</form>

</body>
</html>







