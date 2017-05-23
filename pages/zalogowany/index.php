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
        <div class="row" style="margin-top:50px;">
            
            <div class="col-lg-3 col-md-6">
                <a href="new.php">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">Utwórz nowy projekt</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="modyfikuj.html">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cogs fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">Modyfikuj istniejący projekt</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="szczegoly.html">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-eye fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">Szczegółowy podgląd projektów</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-trash fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">Usuń projekt</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </a>
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
