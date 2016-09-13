
<?php             //täpitähtede jaoks ülevalt Encoding ja convert to UTF-8

	//GET ja POSTi muutujad
	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);

	$signupEmailError = "";
	$signupPasswordError = "";

	// on üldse olemas selline muutuja
	if(isset($_POST["signupEmail"])){    
	
		//jah on olemas
		//kas on tühi
		if(empty($_POST["signupEmail"])){
			
			echo "email on tühi"; 
			// siia jõuab siis kas muutuja on üldse olemas ja kas tühi
			
				$signupEmailError = "E-post on kohustuslik";
			
		}

	}		
	
	
	
	if(isset($_POST["signupPassword"])){    
	
		
		if(empty($_POST["signupPassword"])){
			
			echo "parool on tühi";
			
			
				$signupPasswordError = "Parool on kohustuslik";
			
		}else{
			
			//siia jõuan siis kui parool oli olemas
			//parool ei olnud tühi
			
			if ( strlen($_POST["signupPassword"]) < 8 ) {
				$signupPasswordError = "Parooli pikkus peab olema vähemalt 8 tähemärki ";

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
	<form method="POST"> <!--POST ei kuva paroole ega asju URL'is-->               
	
		<label>E-post</label>
		<br>
		<input name="loginEmail" type="text">
		<br><br>
		<!-- "placeholder" kuvab teksti kasti sisse -->
		<input name="loginPassword" placeholder="Parool" type="password">
		<br><br>
		<input type="submit" value="Logi sisse">
	
	
	</form>

	
<h1>Loo kasutaja</h1>    
	<form method="POST"> <!--POST ei kuva paroole ega asju URL'is-->               
	
		<label>E-post</label>
		<br>
		<input name="signupEmail" type="text"> 
		
		<?php echo $signupEmailError;?>
		
		<br><br>
		
		<input name="signupPassword" placeholder="Parool" type="password">
		<?php echo $signupPasswordError;?>
		<br><br>
		<input type="submit" value="Registreeru">
	
	
	</form>
	
	
</body>
</html>