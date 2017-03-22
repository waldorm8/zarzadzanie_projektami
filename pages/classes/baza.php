<?php
class Baza {
     protected $link;
    
    function __construct(){
        require('daneDoBazy.php');
        $this->link = mysqli_connect($db_ip, $db_user, $db_password, $db_name);
        
        if(!$this->link){
            echo "Błąd: Nie można połączyć z bazą." . PHP_EOL;
            echo "Numer błędu: " . mysqli_connect_errno() . PHP_EOL;
            echo "Błąd: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
       //echo "polaczono z baza";
    }
    
    protected function protect($input){
        if(get_magic_quotes_gpc()){
            $input = stripslashes($input);
        }
        $input = strip_tags($input);
        $input = htmlspecialchars($input);
        return mysql_real_escape_string($input);
    }
    
    protected function czy_uzytk_istnieje($email, $username){
        $zapytanie = "SELECT login, email FROM uzytkownicy WHERE login= '".$username."' AND email = '".$email."';";
        
        if($result = $this -> link -> query($zapytanie)){
            return $result -> num_rows;
            
            $result->close();
        }
        else{
             echo '<p class="bg-warning">Zapytanie nie zostało wykonane poprawnie!</p>';
        }
    }
    
    
    public function zarejestruj_uzytkownika($username, $email, $password){    
        $protected_username = $this->protect($username);
        $protected_email = $this->protect($email);
        $protected_password = $this->protect($password);
        $hashed_pass = sha1($protected_password);
        
        $zapytanie = "INSERT INTO uzytkownicy(login, haslo, email) 
                        VALUES           ('".$protected_username."','".$hashed_pass."','".$protected_email."')";
        
        if($this -> czy_uzytk_istnieje($email, $username) > 0){ 
            echo '<p class="bg-danger">Uzytkownik o nicku: ' . $username . ' i e-mailu: ' . $email . ' już istnieje</p>';
        }
        else{
            $wynik = @$this->link -> query($zapytanie);
        
            if($wynik === false){
                echo '<p class="bg-warning">Zapytanie nie zostało wykonane poprawnie!</p>';
                $this->link -> close();
            }
            else{
                echo '<p class="bg-success">Dziekujemy za rejestracje.</p>';
                $this->link -> close();
            }
        }
    }
}