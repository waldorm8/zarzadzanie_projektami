
<?php 
require('pages/classes/user.php');
$user = new User();

if($user -> sprawdz_log() == True){

    $today = date("y.m.d");

    if(isset($_POST['edytuj_projekt']) == True){
        $user -> zapisz_zeedytowany_projekt($_GET['id']);
    }
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" id="new_quest" style="background: #eaebed; border-style:none;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edycja projektu</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo "<form role=\"form\" method=\"post\" action=\"index.php?edycja&id=".$_GET['id']."\">" ?>
                            <fieldset>
                                <?php $user -> edytuj_projekt($_GET['id']); ?>
                                <button name="edytuj_projekt" type="submit" class="btn btn-lg btn-success btn-block">Edytuj projekt</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
<?php 
}
else{
    echo '<meta http-equiv = "refresh" content="1; URL=home">';
    echo '<p>TAK NIE WOLNO! NIE ZALOGOWALES SIE NIE MASZ DOSTEPU!</p>';
}
?>
