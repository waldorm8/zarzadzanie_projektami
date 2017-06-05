
<?php 
    require('classes/baza.php'); 
    $nowa_baza = new Baza();
    
    if(isset($_POST['username']) == true){
        $nowa_baza -> zarejestruj_uzytkownika($_POST['username'], $_POST['email'], $_POST['password']);
    }
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default"  id="login_panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Rejestracja</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="register">
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
