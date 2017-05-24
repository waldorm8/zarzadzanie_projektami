<?php

class Page{
	protected $page;

	function __construct($page){
		if($page == "main_menu"){
			$this->view_header_login();
			$this->view_sidebar_login(); // inny sidebar bedzie
			$this->view_content($page);
			$this->view_footer();
		}
		else{
			$this->view_header();
			$this->view_sidebar();
			$this->view_content($page);
			$this->view_footer();
		}
	}

	protected function view_header_login(){
		require('pages/zalogowany/header.php');
	}
	protected function view_sidebar_login(){
		require('pages/zalogowany/sidebar.php');
	}
	protected function view_header(){
		require('pages/header.php');
	}

	protected function view_footer(){
		require('pages/footer.php');
	}

	protected function view_sidebar(){
		require('pages/sidebar.php');
	}

	protected function view_content($page){
		if($page == null || $page == "home"){
			require('pages/login.php'); // strona z logowaniem czyli strona glowna
		}
		else if($page == "main_menu"){
			require('pages/zalogowany/index.php');
		}
		else if($page == "forget_password")
		{
			require('pages/forget_password.php'); //strona przypomienia hasla
		}
		else if($page == "register"){
			require('pages/register.php'); // strona rejestracji
		}
		else if($page == "add_project"){
			require('pages/zalogowany/new.php');
		}
		else if($page == "project_details"){
			require('pages/zalogowany/szczegoly.php');
		}
		else{
			echo "strona nie istneije";
		}
	}
}