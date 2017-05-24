
<?php 
require('pages/classes/user.php');
$user = new User();

if($user -> sprawdz_log() == True){

    $today = date("y.m.d");

    if(isset($_POST['utworz_projekt']) == True){
        $user -> dodaj_projekt($_POST['name'], $_POST['description'],  $today, $_POST['data_end'], $_SESSION['id_usera']);
    }
?>
    

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" id="new_quest" style="background: #eaebed; border-style:none;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nowy projekt</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="add_project">
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
<?php 
}
else{
    echo '<meta http-equiv = "refresh" content="1; URL=../login.php">';
    echo '<p>TAK NIE WOLNO! NIE ZALOGOWALES SIE NIE MASZ DOSTEPU!</p>';
}
?>
