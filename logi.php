<?php
//GET a POST muutujad

//var_dump ($_GET);
//echo "<br>";
//var_dump ($_POST);

//$_POST["signupEmail"]

$singupEmailError = "";
$singupPasswordError = "";

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

