<?php

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
	
	$signupPasswordError = "";
	

	
	//kas on üldse olemas
if (isset ($_POST["loginPassword"])) {
	
	//oli olemas, ehk keegi vajutas nuppu
	//kas oli tühi
	if (empty ($_POST["signupEmail"])) {
		//oli töesti tühi
		echo "email oli tühi";
		$signupPasswordError = "See väli on kohustuslik";
	} else {
		
		//oli midagi, ei olnud tühi
		//kas pikkus vähemalt 8
		if(strlen($_POST["signupPassword"]) <8 ) {
			$singupPasswordError = "Parool peab olema vähemalt 8 tm pikk ";
		}
	}
}

$signupmobilenumberError = "";

//kas on üldse olemas
if (isset ($_POST["signupmobilenumber"])) {
	
	//oli olemas, ehk keegi vajutas nuppu
	//kas oli tühi
	if (empty ($_POST["signupmobilenumber"])) {
		//oli töesti tühi
		echo "telefon number oli tühi";
		$signupmobilenumber = "See väli on kohustuslik";
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
 <label>E-post</label>
 <input name="loginEmail" type="email">
 
 <br><br>
 <label>Password</label>
 <input name="loginPassword" type="password">
 
  <br><br>
 <label>Mobilenumber</label>
 <input name="loginmobile" type="mobile">
 
 
 <br><br>
 
 <input type="submit">
 <form>
 
 
 <h1>Logi kasutaja</h1>
 
  <form method="POST">
  
 <label>E-post</label>
 <input name="signnupEmail" type="email"> <?php echo $signupEmailError; ?>
 
 <br><br>
 <label>Password</label>
 <input name="loginPassword" type="password" <?php echo $signupPasswordError ?>
 
  <br><br>
 <label>Password</label>
 <input name="loginmobile" type="mobile" <?php echo $signupmobilenumberError ?>
 
 
 <br><br>
 
 <input type="submit" value="Loo kasutaja">
 
 </form>

 
 </body>
</html>