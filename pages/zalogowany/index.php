<?php 
/*require('../classes/user.php');
$zalogowany_user = new User();*/
session_start();
if(isset($_SESSION['zalogowany'])){
    
    if($_SESSION['zalogowany'] == 1){
        echo 'jestes zalogowany jako ' . $_SESSION['login'];
    
        echo '<br /><a href="../login.php?wylogowany">wyloguj</a>';   
    }
}
else{
    echo '<meta http-equiv = "refresh" content="1; URL=../login.php">';
    echo '<p>TAK NIE WOLNO! NIE ZALOGOWALES SIE NIE MASZ DOSTEPU!</p>';
}
