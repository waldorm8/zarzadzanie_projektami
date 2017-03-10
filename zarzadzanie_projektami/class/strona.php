<?php

class Page {
    protected $page;
    protected $phrase; 
    function __construct($page){
        if($page == "panel_usera" || $page == "search"){
            $this->user_panel_header();
            $this->view_page($page);
            $this->view_footer();
        }
        else{
            $this->view_header();
            $this->view_page($page);
            $this->view_footer();
        }
    }
    public function get_phrase(){
        return $phrase;
    }
    protected function view_header(){
        require('header.php');
    }
    protected function view_footer(){
        require('footer.php');
    }
    protected function user_panel_header(){
        require('user_menu.php');
    }
    protected function search($phrase){
        /*obsluga wyszukiwania*/
    }
    protected function view_page($page){      
        
            if($page == null || $page == "home"){
                require('content.php');
            }
            else if($page == "login"){
                require('login.php');
            }
            else if($page == "szczegoly"){
                require('szczegoly.php');
            }
            else if($page == "kontakt"){
                require('kontakt.php');
            }
            else if($page == "panel_usera"){
                require('panel_usera.php');
            }
            else if($page == "rejestracja"){
                require('rejestracja.php');
            }
            else if($page == "search"){
                require('search.php');
            }
            else{
                require('404.php');
            }      
    }
}