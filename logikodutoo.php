<?php
//ma ei leidnud viga miks mull ei tule valja sonumi kui e-post ja Full name on tuhjad, errori ka ei ole. 
//ja kuna ma ei leidnud kuhu panna oma MVP ideed siis kirjutan seda siia, et tahaks teha vaike veebi lehekulje kus naiteks minu kursuse liikmed kus on huvitanus naiteks kossu mangimises voiks valida sobiva kuupaeva ja aja et minna koos mangida, voi sama teema jousaaliga naiteks. 

$singupEmailError = "";
$singupPasswordError = "";
$singupNameError = "";
$singupUsernameError = "";

if( isset( $_POST["signupEmail"])) {
	if(empty($_POST["signupEmail"])){
		$singupEmailError = "email on tuhi";

	}
}

if( isset( $_POST["signupPassword"])) {
	if(empty($_POST["signupPassword"])){
		$singupPasswordError = "pass on tuhi";

	} else {
		if (strlen ($_POST["signupPassword"]) < 8 ){$singupPasswordError = "pass on luhike";}
}

		//siia juan siis kuiparool oli oleman
	
	
}




if( isset( $_POST["signupName"])) {
	if(empty($_POST["signupName"])){
		$singupNameError = "No name taped";

	}
}

if( isset( $_POST["signupUsername"])) {
	if(empty($_POST["signupUsername"])){
		$singupUsernameError = "Username not taped";

	} else {
		if (strlen ($_POST["signupUsername"]) <= 3 ){$singupUsernameError = "Username not long enought";}
}

		}

?>










<!DOCTYPE html>
<html>
<head>
<title>Logi sisse voi loo oma konto </title>
</head>
<body>

<h1>Logi sisse</h1>
<form method="POST">
    
	<label>E-post</label><br>
	<input name="singupEmail" type ="text"><br><br>
	
	
	<input name="loginpassword" placeholder ="Password" type ="password"><br><br>

	<input type ="submit">
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Logi sisse voi loo oma konto </title>
</head>
<body>

<h1>Loo kasutaja</h1>
<form method="POST">
    
	<label>E-post</label><br>
	<input name="singupEmail" type ="text"><?php echo $singupEmailError; ?><br><br>
	
	
	<input name="signupPassword" placeholder ="Password" type ="password"><?php echo $singupPasswordError; ?>
	<br><br>

	<input type ="submit">
</body>
</html>





<!DOCTYPE html>
<html>
<head>
<title>Name and Username </title>
</head>
<body>

<h1>Insert Name and Username</h1>
<form method="POST">
    
	<label>Full name</label><br>
	<input name="singupName" type ="text"><?php echo $singupNameError; ?><br><br>
	
	
	<input name="signupUsername" placeholder ="Username" type ="password"><?php echo $singupUsernameError; ?>
	<br><br>

	<input type ="submit">
</body>
</html>


 
