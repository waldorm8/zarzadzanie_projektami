<script type="text/javascript">
    function pokaz_alert() {
        alert("Czy na pewno chcesz usunąć cały projekt? Jest to nieodwracalna zmiana!");
}
</script>

<?php 
require('pages/classes/user.php');
$user = new User();

if($user -> sprawdz_log() == True){

?>
        <div id="page-wrapper">
            <div class="row" style="margin-top:50px;">
		        <?php
                   $user -> wyswielt_projekty($_SESSION['id_usera']);
                ?>
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
