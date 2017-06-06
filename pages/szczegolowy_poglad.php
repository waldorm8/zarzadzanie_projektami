<?php
require('pages/classes/user.php');
$user = new User();
if($user -> sprawdz_log() == True){

?>


<div id="page-wrapper">
            <div class="row" style="margin-top:50px;">
                
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:#00bff3 !important; color:white;">
                            <?php echo "<h4>".$user -> get_project_title($_GET['project_id'])."</h4>" ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Lp</th>
                                            <th>Użytkownik</th>
                                            <th>Mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $user -> wyswietl_uzytkownikow($_GET['project_id']);?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" style="width:102%; margin-left:-1%;">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:#00bff3 !important; color:white;">
                            Zadania
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#zadanie1" data-toggle="tab">Zadanie 1</a>
                                </li>
                                <li><a href="#zadanie2" data-toggle="tab">Zadanie 2</a>
                                </li>
                                <li><a href="#zadanie3" data-toggle="tab">Zadanie 3</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="zadanie1">
                                    <h4>User 1, User 3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="tab-pane fade" id="zadanie2">
                                    <h4>User 2, User 3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="tab-pane fade" id="zadanie3">
                                    <h4>User 3, User 1</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" style="margin-left: -2%;">
                <div class="panel-body">
                <p>
                    <a href="new_user.html"><button type="button" class="btn btn-primary btn-lg">Dodaj użytkownika do projektu</button></a>
                    <a href="delete_user.html"><button type="button" class="btn btn-primary btn-lg">Usuń użytkownika z projektu</button></a>
                    <a href="index.php?usunieto&id=><button type="button" class="btn btn-primary btn-lg">Usuń cały projekt</button></a>
                    <a href=""><button type="button" class="btn btn-primary btn-lg">Edytuj projekt</button></a>
                </p>
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