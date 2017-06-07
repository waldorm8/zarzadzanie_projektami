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
                    <div class="col-lg-12" style="margin-left: -2%;">
                <div class="panel-body">
                <p>
                     <?php echo "<a href=\"index.php?new_user&id_projektu=".$_GET['project_id']."\">"?><button type="button" class="btn btn-primary btn-lg btn-block" style="width: 104%;">Dodaj użytkownika</button></a>
                    
                </p>
                </div>
                </div>
                </div>
            </div>

            <div class="col-lg-12" style="width:102%; margin-left:-1%;">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:#00bff3 !important; color:white;">
                            Sprinty i zadania
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#zadanie1" data-toggle="tab">Sprint 1</a>
                                </li>
                                <li><a href="#zadanie2" data-toggle="tab">Sprint 2</a>
                                </li>
                                <li><a href="#zadanie3" data-toggle="tab">Sprint 3</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="zadanie1">
                                    <h3>Zadanie 1</h3><h4>Tomek, Arek, Piotrek, Krystian</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <h3>Zadanie 2</h3><h4>Tomek, Arek, Piotrek, Krystian</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="tab-pane fade" id="zadanie2">
                                    <h3>Zadanie 1</h3><h4>Tomek, Arek, Piotrek, Krystian</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <h3>Zadanie 2</h3><h4>Tomek, Arek, Piotrek, Krystian</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="tab-pane fade" id="zadanie3">
                                    <h3>Zadanie 1</h3><h4>Tomek, Arek, Piotrek, Krystian</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <h3>Zadanie 2</h3><h4>Tomek, Arek, Piotrek, Krystian</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" style="margin-left: -2%;">
                <div class="panel-body">
                <p>
                     <a href="sprint.html"><button type="button" class="btn btn-primary btn-lg btn-block" style="width: 104%;">Dodaj nowego sprinta</button></a>
                    
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
