<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zarządzanie projektem informatycznym</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/css/style.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php 
    require('classes/baza.php'); 
    $nowa_baza = new Baza();
    
    if(isset($_POST['username']) == true){
        $nowa_baza -> zarejestruj_uzytkownika($_POST['username'], $_POST['email'], $_POST['password']);
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
                <a class="navbar-brand" href="login.php">ADMIN</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" id="menu_b">
                    <ul class="nav" id="side-menu">
                        <li class="side_m">
                            <a href="#" class="side_h"><i class="fa fa-calendar"></i> Kalendarz</a>
                        </li>
                        <li class="side_m">
                            <a href="#" class="side_h"><i class="fa fa-cog"></i> Ustawienia aplikacji</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default"  id="login_panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Rejestracja</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="register.php">
                            <fieldset>
                                <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nazwa użytkownika" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Hasło" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Hasło ponownie" name="password_again" type="password" value="">
                                </div>
                            
                                    <input type="submit" value="Zarejestruj się" class="btn btn-lg btn-success btn-block" />
                            </fieldset>
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
