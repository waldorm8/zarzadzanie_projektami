<?php

require('pages/classes/page.php');

if(isset($_GET['page'])){
	$kindOfPage = $_GET['page'];
}
else{
	$kindOfPage = null;
}
$page = new Page($kindOfPage);