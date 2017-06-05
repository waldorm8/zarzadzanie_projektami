<?php 
    require('pages/classes/user.php');
    $logowanie = new User(); //obsluga logowania;
    if(isset($_POST['login'])){
        $logowanie -> zaloguj_sie($_POST['login'], $_POST['password'], $_POST['login']);
    }
    else if(isset($_GET['wylogowany'])){
        $logowanie -> wyloguj();      
    }
    else if($logowanie -> sprawdz_log() == true){
        echo '<meta http-equiv = "refresh" content="1; URL=main_menu">';
    }
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" id="login_panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Logowanie</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail/Login" name="login" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Hasło" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Zapamiętaj mnie
                                    </label>
                                </div>
                                <input type="submit" value="Zaloguj" class="btn btn-lg btn-success btn-block" />
                                <a href="forget_password" class="btn btn-lg btn-success btn-block" style="margin-top:50px;">Nie pamiętasz hasła?</a>
                                <a href="register" class="btn btn-lg btn-success btn-block">Nie masz konta?</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>