<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zarządzanie projektem informatycznym</title>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../dist/css/style.css" rel="stylesheet">
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php 
require('../classes/user.php');
$user = new User();

if($user -> sprawdz_log() == True){

    $today = date("y.m.d");

    if(isset($_POST['utworz_projekt']) == True){
        $user -> dodaj_projekt($_POST['name'], $_POST['description'],  $today, $_POST['data_end'], $_SESSION['id_usera']);
    }
?>
    <div id="wrapper">

         <nav id="main-navbar" class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../login.php">ADMIN</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw" id="envelope_fa"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw" id="bell_fa"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw" id="user_fa"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" id="logout_fa"><i class="fa fa-sign-out fa-fw"></i> Wyloguj</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" id="menu_b">
                    <ul class="nav" id="side-menu">
                        <li class="side_m">
                            <a href="#" class="side_h"><i class="fa fa-calendar"></i> Kalendarz</a>
                        </li>
                        <li class="side_m">
                            <a href="szczegoly.php" class="side_h"><i class="fa fa-calendar"></i> Projekty</a>
                        </li>
                        <li class="side_m">
                            <a href="#" class="side_h"><i class="fa fa-user"></i> Profil użytkownika</a>
                        </li>
                        <li class="side_m">
                            <a href="#" class="side_h"><i class="fa fa-envelope"></i> Wiadomości</a>
                        </li>
                        <li class="side_m">
                            <a href="#" class="side_h"><i class="fa fa-cog"></i> Ustawienia aplikacji</a>
                        </li>
                        <li class="side_m">
                            <a href="../login.php?wylogowany" class="side_h"><i class="fa fa-sign-out fa-fw"></i> Wyloguj</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" id="new_quest" style="background: #eaebed; border-style:none;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nowy projekt</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="new.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nazwa" name="name" type="text" autofocus>
                                </div>
								<div class="form-group">
                                    <textarea class="form-control" name="description" placeholder="Krótki opis projektu"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Zespół" name="zespol" type="text" value="">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Data zakończenia" name="data_end" type="date">
                                </div>
                                
                                <!--<input type="submit" value="Dodaj nowego członka zespołu" class="btn btn-lg btn-success btn-block" /> -->
                                
                                <!--<a href="#" class="btn btn-lg btn-success btn-block" style="margin-top: 70px;">Utwórz zadanie</a>-->
                                <button name="utworz_projekt" type="submit" class="btn btn-lg btn-success btn-block">Utwórz projekt</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php 
}
else{
    echo '<meta http-equiv = "refresh" content="1; URL=../login.php">';
    echo '<p>TAK NIE WOLNO! NIE ZALOGOWALES SIE NIE MASZ DOSTEPU!</p>';
}
?>