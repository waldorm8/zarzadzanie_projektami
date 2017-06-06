<?php

require('pages/classes/page.php');

if(isset($_GET['usunieto'])){

	require('pages/classes/user.php');
	$user = new User();
	if($user -> sprawdz_log() == True){
		$user->usun_projekt($_GET['id']);
		header('Location: projects');
	}
}
else if(isset($_GET['project_id'])){
	$kindOfPage = "project_details";
}
else if(isset($_GET['edycja'])){
	$kindOfPage = "edition";
}
else if(isset($_GET['page'])){
	$kindOfPage = $_GET['page'];
}
else{
	$kindOfPage = null;
}
$page = new Page($kindOfPage);