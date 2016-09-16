<?php

//var_dump($_GET);

//echo "<br>";

//var_dump($_POST);
$signupEmailError = "*";
//kas keegi vajutas nuppu ja see on olemas

	if(isset ($_POST["signupEmail"])) {

//on olemas
//kas epost on tühi
			if(empty ($_POST["signupEmail"])) {
//on tühi
						$signupEmailError = "* Väli on kohustuslik!";
			}
	}

$signupPasswordError = "*";
//kas keegi vajutas nuppu ja see on olemas


if(isset ($_POST["signupPassword"])) {

//on olemas
//kas epost on tühi
if(empty ($_POST["signupPassword"])) {
//on tühi
$signupPasswordError = "* Väli on kohustuslik!";
	}
	else {
	//parool ei olnud tyhi
	if (strlen($_POST["signupPassword"]) < 8 ) {
	$signupPasswordError = "* parool peab olema miinimum 8 symbolit pikk";
	}
}
}

$signupUserError = "*";
if(isset ($_POST["signupUsername"])) {

//on olemas
//kas epost on tühi
		if(empty ($_POST["signupUsername"])) {
//on tühi
					$signupUserError = "* Väli on kohustuslik!";
		}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sisselogimiseleht</title>
</head>
<body>

<h1>Logi sisse </h1>

	<form method="POST">
		<label>E-mail</label><br>
		<input name="loginEmail" type="email">

		<br><br>
<label for="loginPassword">Salasõna</label><br>
		<input name="loginPassword" placeholder="Password" type="password">

		<br><br>

		<input type="submit" value = "Logi Sisse">

		<br><br>

		<h1>Loo kasutaja </h1>

	<form method="POST">
		<label>E-mail</label><br>
		<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>

		<br><br>
<label for="signupPassword">Salasõna</label><br>
		<input name="signupPassword" placeholder="Password" type="password"> <?php echo $signupPasswordError; ?>
<br>
		<br><label for="signupUsername">Kasutajatunnus</label><br>

		<input type="text" name="signupUsername" value=""> <?php echo $signupUserError; ?>
<br>
		<br><label for="Nimi">Nimi</label><br>

		<input type="text" name="Nimi" value="">

		<br><br>

		<input type="submit" value = "Loo kasutaja">


	</form>
	<br><br>
Tahan teha portfoolio lehekest kus saaks vaadata minu tehtud töid
</body>
</html>
