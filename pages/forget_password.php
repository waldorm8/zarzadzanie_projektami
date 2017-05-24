
<?php
require('classes/user.php');
$przypomnienie_hasla = new User(); // obsluga przypomnienia hasla
if(isset($_POST['przypomnij'])){
	$przypomnienie_hasla -> przypomnij($_POST['login'], $_POST['email']);
}
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" id="login_panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Podaj login twojego konta lub e-mail</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="forget_password.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Login" name="login" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="">
                                </div>
                                
                                <input type="submit" value="Przypomnij" name="przypomnij" class="btn btn-lg btn-success btn-block" />
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

