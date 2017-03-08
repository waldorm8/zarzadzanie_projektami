<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
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
      <span class="mdl-layout-title">Zarządzanie projektami aplikacji</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link menu_link" href="home">Zaczynamy</a><!--kieruje do logowania-->
        <a class="mdl-navigation__link menu_link" href="szczegoly">Szczegóły</a>
        <a class="mdl-navigation__link menu_link" href="kontakt">Kontakt</a>
          <a class="mdl-navigation__link menu_link" href="login">Zaloguj</a>
      </nav>
    </div>
  </header>
    <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="home">Zaczynamy</a><!--kieruje do logowania-->
      <a class="mdl-navigation__link" href="szczegoly">Szczegóły</a>
      <a class="mdl-navigation__link" href="kontakt">Kontakt</a>
        <a class="mdl-navigation__link" href="login">Zaloguj</a>
    </nav>
  </div>