<?php
require("baza.php");

class User extends Baza {
    
    function __construct(){
        session_start();
    }
    function zaloguj_sie($login, $password){
        $baza = new Baza();
        $hashed_password = sha1($password);
        
        $zapytanie = "SELECT login, haslo FROM uzytkownicy WHERE login = '".$login."' AND haslo = '".$hashed_password."';";
        
        if($result = $baza -> link -> query($zapytanie)){
            if($result -> num_rows == 1){
                $_SESSION['zalogowany'] = 1;
                $_SESSION['login'] = $login;
                header('Location: zalogowany/index.php');
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
        //$_SESSION['zalogowany'] = 0;
        session_unset();
    }

}