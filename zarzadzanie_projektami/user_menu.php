<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
            <!-- Uses a transparent header that draws on top of the layout's background -->
        <title>
            Zarządzanie tworzeniem aplikacji
        </title>
    </head>
<body>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Witaj $nick!</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link menu_link" href="home">Dodaj projekt</a><!--kieruje do logowania-->
        <a class="mdl-navigation__link menu_link" href="szczegoly">Wyloguj</a>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <form action="index.php?strona=search&phrase=<?php $_GET['search'] ?>" method="get">
                    <input class="mdl-textfield__input" type="text" name="search"
                    id="fixed-header-drawer-exp">
                </form>
            </div>
        </div>
      </nav>
  </header>
    <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="home">Dodaj projekt</a>
     <a class="mdl-navigation__link" href="login">Wyloguj</a>
    </nav>
  </div>