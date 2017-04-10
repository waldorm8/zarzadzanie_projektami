

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
require('../classes/user.php');
$user = new User();

if($user -> sprawdz_log() == True){
?>
<p>Witaj <?php $_SESSION['login'] ?></p>
<p><a href="../login.php?wylogowany">Wyloguj</a>
<table border="dotted" width="300px;" align="center">
	<tr>
		<th>
			L.p
		</th>
		<th>
			Nazwa projektu
		</th>
	</tr>
	<tr>
		<td>
			1
		</td>
		<td>
			Projekt 1
		</td>
	</tr>
	<tr>
		<td>
			2
		</td>
		<td>
			Projekt 2
		</td>
	</tr>
</table>
<?php 
}
else{
	echo '<meta http-equiv = "refresh" content="1; URL=../login.php">';
    echo '<p>TAK NIE WOLNO! NIE ZALOGOWALES SIE NIE MASZ DOSTEPU!</p>';
}
?>
</body>
</html>
