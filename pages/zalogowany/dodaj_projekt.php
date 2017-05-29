<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
		form{
			margin:0px auto;
			text-align:left;
			width:200px;
			padding:10px;
		}
		input, textarea{
			margin-top:10px;
		}
	</style>
</head>
<?php 
require('../classes/user.php');
$user = new User();

if($user -> sprawdz_log() == True){
	if(isset($_POST['zapisz'])){
		$user -> dodaj_projekt($_POST['nazwa_projektu'], $_POST['opis_projektu']);
	}
?>
<body>
	<form method="post" action="dodaj_projekt.php">
		<input type="text" name="nazwa_projektu" placeholder="Nazwa projektu" />
		<textarea name="opis_projektu" placeholder="Krótki opis"></textarea>
		<input type="submit" value="Zapisz" name="zapisz" />
	</form>
<?php 
}
else{
	header('Location: home');
}
?>
</body>
</html>