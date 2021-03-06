<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width =device-width, initial-scale=1">
    <title id="title">WeFixIt - Manutenção</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link id="favicon" rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.blue_grey-pink.min.css">
    <link rel="stylesheet" href="assets/stylesheets/styles.css">
</head>
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="assets/javascript/templating.js"></script>
<script src="assets/javascript/fix-navbar.js"></script>
<script src="https://code.getmdl.io/1.1.1/material.min.js"></script>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="ajax-header mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            <h3>WeFixIt - Manutenção</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <input type="hidden" value="index" class="page-holder" >
        <div id="sticky-anchor"> </div>
        <div id="sticky" class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
            <a href="/" data-link="index" class="link-to mdl-layout__tab is-active">Início</a>
            <a href="/" data-link="description" class="link-to mdl-layout__tab">O que fazemos</a>
            <a href="/" data-link="about" class="link-to mdl-layout__tab">Sobre nós</a>
            <a href="/" data-link="contact" class="link-to mdl-layout__tab">Contato</a>
            <a href="/" data-link="faq" class="link-to mdl-layout__tab">FAQ</a>
        </div>
    </header>
    <main class="ajax-body mdl-layout__content"></main>
    <footer class="ajax-footer mdl-mega-footer">
        <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
                <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                <h1 class="mdl-mega-footer--heading">Features</h1>
                <ul class="mdl-mega-footer--link-list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Updates</a></li>
                </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
                <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                <h1 class="mdl-mega-footer--heading">Details</h1>
                <ul class="mdl-mega-footer--link-list">
                    <li><a href="#">Spec</a></li>
                    <li><a href="#">Tools</a></li>
                    <li><a href="#">Resources</a></li>
                </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
                <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                <h1 class="mdl-mega-footer--heading">Technology</h1>
                <ul class="mdl-mega-footer--link-list">
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Patterns</a></li>
                    <li><a href="#">Usage</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contracts</a></li>
                </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
                <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                <h1 class="mdl-mega-footer--heading">FAQ</h1>
                <ul class="mdl-mega-footer--link-list">
                    <li><a href="#">Questions</a></li>
                    <li><a href="#">Answers</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
        </div>
        <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
                More Information
            </div>
            <ul class="mdl-mega-footer--link-list">
                <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy and Terms</a></li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>
