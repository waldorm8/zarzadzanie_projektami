<?php
require('header.php');
if(isset($_GET['strona']) && $_GET['strona'] == 'login'){
    require('login.php');
}
else if(isset($_GET['strona']) && $_GET['strona'] == 'kontakt'){
    require('kontakt.php');
}
else if(isset($_GET['strona']) && $_GET['strona'] == 'szczegoly'){
    require('szczegoly.php');
}
else if(isset($_GET['strona']) && $_GET['strona'] == 'panel_usera'){
    require('panel_usera.php');
}
else{
    require('content.php');
}

require('footer.php');