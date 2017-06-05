<?php
require("baza.php");

class User extends Baza {
    
    function __construct(){
        if(!isset($_SESSION['zalogowany'])){
            session_start();
        }
    }
    function zaloguj_sie($login, $password, $email){
        $baza = new Baza();
        $hashed_password = sha1($password);
        
        $zapytanie = "SELECT user_id, login, password, email FROM users WHERE (login = '".$login."' OR email = '".$email."') AND password = '".$hashed_password."';";
        
        if($result = $baza -> link -> query($zapytanie)){
            if($result -> num_rows == 1){
                $_SESSION['zalogowany'] = 1;
                while($user = $result -> fetch_assoc()){
                 $_SESSION['login'] = $user['login'];
                 $_SESSION['id_usera'] = $user['user_id'];   
                }
                header('Location: main_menu');
            }
            else{
                echo '<p class="bg-warning">Nie poprawne dane!</p>';   
            }
            
            $result->close();
        }
        else{
             echo '<p class="bg-warning">Zapytanie nie zostało wykonane poprawnie!</p>';
        }
    }

     function wyloguj(){
        session_unset();
    }

    function sprawdz_log(){
        if(!isset($_SESSION['zalogowany'])){
            return False;
        }
        else{
            return True;
        }
    }
    
    function przypomnij($login, $email){
        $baza = new Baza();

        if(($login != null || $login != '') && ($email == null || $email == '')){//jesli wpiszemy login
            $zapytanie = "SELECT email FROM users WHERE login = '".$login."';";
            $proper_email = '';
            if($result = $baza -> link -> query($zapytanie)){
                if($result -> num_rows == 1){
                    while($wynik = $result -> fetch_assoc()){
                        $proper_email = $wynik['email']; // wyciagniecie emaila z bazy zeby na niego wyslac emaila
                    }
                    $chars_string = '321qwe45wq65';
                    $shuffled_string = str_shuffle($chars_string);
                    $msg = "Witam, twoje tymczasowe haslo to: " . $shuffled_string;
                    $headers = "From: waldorm8@gmail.com" . "\r\n";
                    mail($proper_email, "Przypomnienie hasla", $msg, $headers);
                    $zapytanie = "UPDATE users SET password = '".sha1($shuffled_string)."' WHERE login = '".$login."'";
                    $baza -> link -> query($zapytanie);
                    echo '<p class="bg-success">Wyslalismy do Ciebie emaila z tymczasowym haslem.</p>';
                    $result -> close();
                    //generujemy tymczasowe haslo, zapisujemy je do bazy i wysylamy na emaila
                }
                else{
                    echo '<p class="bg-warning">Nie ma takiego konta.</p>';
                }
            }
        }
        elseif(($email != null || $email != '') && ($login == null || $login == '')){//jesli wpiszemy email
            $zapytanie = "SELECT login FROM users WHERE email = '".$email."';";

            if($result = $baza -> link -> query($zapytanie)){
                if($result -> num_rows == 1){
                    $chars_string = '321qwe45wq65';
                    $shuffled_string = str_shuffle($chars_string);
                    $msg = "Witam, twoje tymczasowe haslo to: " . $shuffled_string;
                    $headers = "From: waldorm8@gmail.com" . "\r\n";
                    mail($email, "Przypomnienie hasla", $msg, $headers);
                    $zapytanie = "UPDATE users SET password = '".sha1($shuffled_string)."' WHERE email = '".$email."'";
                    $baza -> link -> query($zapytanie);
                    echo '<p class="bg-success">Wyslalismy do Ciebie emaila z tymczasowym haslem.</p>';
                    $result -> close();
                    //generujemy tymczasowe haslo, zapisujemy je do bazy i wysylamy na emaila 
                }
                else{
                    echo '<p class="bg-warning">Nie ma takiego konta.</p>';   
                }
            }
        }

    }

    function dodaj_projekt($user_id, $title, $description, $date_reg, $date_end, $status, $priority){
        $baza = new Baza();

        if($title != null && $description != null){
            $zapytanie = "INSERT INTO project(project_title, project_description, project_status, project_start_date, project_end_date, project_priority)
                            VALUES('".$title."', '".$description."', '".$status."', '".$date_reg."', '".$date_end."', ".$priority.");";

            $wynik = @$baza -> link -> query($zapytanie);

            $zapytanie2 = "INSERT INTO allocation(user_id, project_id)
                            VALUES(".$user_id.", ".$baza->link->insert_id.");";

            $wynik2 = @$baza -> link -> query($zapytanie2);

            if($wynik === false){
                echo '<p class="bg-warning">Zapytanie nie zostało wykonane poprawnie!</p>';
                $baza->link -> close();
            }
            else{
                echo '<p class="bg-success">Projekt dodano.</p>';
                $baza->link -> close();
            }
        }
    }
    function usun_projekt($id_projektu){
        $baza = new Baza();

        $zapytanie = "DELETE FROM project p, allocation a WHERE a.project_id = $p.id_projektu AND p.project_id=".$id_projektu."";

        $wynik = @$baza -> link -> query($zapytanie);

        if($wynik === false){
            echo '<p class="bg-warning">Zapytanie nie zostało wykonane poprawnie!</p>';
            $baza->link -> close();
        }
        else{
            header('Location: projects');
            $baza->link -> close();
        }
    }

    function wyswielt_projekty($id_usera){
        $baza = new Baza();

        $zapytanie = "SELECT * FROM project p, allocation a 
                    WHERE p.project_id=a.project_id AND a.user_id=".$id_usera.";";

        $wynik = @$baza -> link -> query($zapytanie);

        if($wynik === False){
            echo '<p class="bg-warning">Zapytanie nie zostało wykonane poprawnie!</p>';
            $baza->link -> close();
        }
        else{
            while($dane_projektu = $wynik -> fetch_assoc()){
                echo "
                <a href=\"project_details\">
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" style=\"background:#00bff3 !important; color:white;\">
                           ".$dane_projektu['project_title']."
                            <a href=\"#\" title=\"Dodaj użytkownika do projektu\"><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-plus-circle\" id=\"circle\"></i></button></a>
                            <a href=\"\" title=\"Dodaj zadanie do projektu\"><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-tasks\" id=\"tasks\"></i></button></a>
                            <a href=\"#\" title=\"Usuń użytkownika z projektu\"><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-minus\" id=\"minus\"></i></button></a>
                             <a href=\"index.php?usunieto&id=".$dane_projektu['project_id']."\" title=\"Usuń cały projekt\"><button type=\"button\" class=\"btn btn-default btn-circle\" onclick=\"pokaz_alert()\"><i class=\"fa fa-trash\" id=\"trash\"></i></button></a>
                             <a href=\"#\" title=\"Edytuj projekt\"><button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-minus\" id=\"minus\"></i></button></a>
                        </div>
                        <div class=\"panel-body\">
                            <p>".$dane_projektu['project_description']."</p>
                        </div>
                        <div class=\"panel-footer\" style=\"background:#00bff3; color:white;\">
                            Użytkownik 1, Użytkownik 2, Użytkownik 3
                        </div>
                    </div>
                </div>
                </a>
                ";
            }
        }
    }
}