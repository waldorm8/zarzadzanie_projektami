<?php
require('class/strona.php');

if(isset($_GET['strona'])){
    $kind_of_page = $_GET['strona'];
}
else{
    $kind_of_page = null;
}
$page = new Page($kind_of_page);

if(isset($_GET['search'])){
    $search_page = new Page("search");
}