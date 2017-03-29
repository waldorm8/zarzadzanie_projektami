<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
require('classes/user.php');

$przypomnienie_hasla = new User(); // obsluga przypomnienia hasla

if(isset($_POST['przypomnij'])){
	$przypomnienie_hasla -> przypomnij($_POST['login'], $_POST['email']);
}
?>
	<p>Podaj login twojego konta</p>
	<form action="forget_password.php" method="post">
		<input type="text" name="login" placeholder="Login" />
		<p>lub e-mail</p>
		<input type="email" name="email" placeholder="E-mail" />
		<input type="submit" name="przypomnij" value="Przypomnij" />
	</form>
</body>
</html>