<?php
require('pages/classes/user.php');
$user = new User();
if($user -> sprawdz_log() == True){


if(isset($_POST['newuser'])){
    $user -> dodaj_usera($_GET['id_projektu'], $_POST['name_user']);
}
?>

        <div id="page-wrapper">
            <div class="row" style="margin-top:50px;">
               <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="background: #eaebed; border-style:none;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nowy użytkownik</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo "<form role=\"form\" method=\"post\" action=\"index.php?new_user&id_projektu=".$_GET['id_projektu']."\">"; ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nazwa użytkownika" name="name_user" type="text" autofocus>
                                </div>
                                <input type="submit" name="newuser" value="Dodaj" class="btn btn-lg btn-success btn-block" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            </div>
    </div>
<?php 
}
else{
    header('Location: home');
}
?>
