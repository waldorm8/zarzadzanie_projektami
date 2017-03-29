<?php
require("baza.php");

class User extends Baza {
    
    function __construct(){
        session_start();
    }
    function zaloguj_sie($login, $password, $email){
        $baza = new Baza();
        $hashed_password = sha1($password);
        
        $zapytanie = "SELECT login, haslo, email FROM uzytkownicy WHERE login = '".$login."' OR email = '".$email."' AND haslo = '".$hashed_password."';";
        
        if($result = $baza -> link -> query($zapytanie)){
            if($result -> num_rows == 1){
                $_SESSION['zalogowany'] = 1;
                while($user = $result -> fetch_assoc()){
                 $_SESSION['login'] = $user['login']; // z zapytania wyciagnac login;   
                }
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
        session_unset();
    }

    function przypomnij($login, $email){
        $baza = new Baza();

        if(($login != null || $login != '') && ($email == null || $email == '')){
            $zapytanie = "SELECT email FROM uzytkownicy WHERE login = '".$login."';";
            $proper_email = '';
            if($result = $baza -> link -> query($zapytanie)){
                if($result = num_rows == 1){
                    while($wynik = $result -> fetch_assoc()){
                        $proper_email = $wynik['email']; // wyciagniecie emaila z bazy zeby na niego wyslac emaila
                    }
                    $chars_string = 'sh213123hj1k2j3h123h12k3h12k3jh123kjh123k';
                    $shuffled_string = str_shuffle($chars_string);
                    //generujemy tymczasowe haslo, zapisujemy je do bazy i wysylamy na emaila
                }
                else{
                    echo '<p class="bg-warning">Nie ma takiego konta.</p>';
                }
            }
        }
        elseif(($email != null || $email != '') && ($login == null || $login == '')){
            $zapytanie = "SELECT login FROM uzytkownicy WHERE email = '".$email."';";

            if($result = $baza -> link -> query($zapytanie)){
                if($result = num_rows == 1){
                    //generujemy tymczasowe haslo, zapisujemy je do bazy i wysylamy na emaila 
                }
                else{
                    echo '<p class="bg-warning">Nie ma takiego konta.</p>';   
                }
            }
        }

    }
}