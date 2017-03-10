<?php
require('class/strona.php');

if(isset($_GET['search'])){
    $kind_of_page = 'search';
}
else if(isset($_GET['strona'])){
    $kind_of_page = $_GET['strona'];
}
else{
    $kind_of_page = null;
}
$page = new Page($kind_of_page);


