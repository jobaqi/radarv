﻿<!doctype html>
<!--
Material Design Lite
Copyright 2015 Google Inc. All rights reserved.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
https://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Material Design Lite</title>
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="/public/img/android-desktop.png">
        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <link rel="apple-touch-icon-precomposed" href="/public/img/ios-desktop.png">
        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="/public/img/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">
        <link rel="shortcut icon" href="/public/img/favicon.png">
        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
        <link rel="canonical" href="http://www.example.com/">
        -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">
        <link rel="stylesheet" href="/public/css/custom.css">
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color-text--white">
                <div class="mdl-layout__header-row mdl-color--blue-500">
                    <span class="mdl-layout-title"><?php echo ($title === null ? "PVI" : $title) ?></span>
                </div>
            </header>
            <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                <header class="demo-drawer-header">
                    <img src="/public/img/user.jpg" class="demo-avatar">
                    <div class="demo-avatar-dropdown">
                        <span>hello@example.com</span>
                        <div class="mdl-layout-spacer"></div>
                        <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">arrow_drop_down</i>
                        <span class="visuallyhidden">Accounts</span>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                            <li class="mdl-menu__item">hello@example.com</li>
                            <li class="mdl-menu__item">info@example.com</li>
                            <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                        </ul>
                    </div>
                </header>
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    <a class="mdl-navigation__link" href="<?php echo url('/'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
                    <a class="mdl-navigation__link" href="<?php echo url('/login'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">face</i>Inloggen</a>
                    <a class="mdl-navigation__link" href="<?php echo url('/analyse'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i>Analyse overzicht</a>
                    <a class="mdl-navigation__link" href="<?php echo url('/medewerker'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i>Medewerker overzicht</a>
                    <a class="mdl-navigation__link" href="<?php echo url('/klassen'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i>Klassen overzicht</a>
                    <a class="mdl-navigation__link" href="<?php echo url('/regelingen'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i>Regelingen overzicht</a>
                    <a class="mdl-navigation__link" href="<?php echo url('/taken'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i>Taken overzicht</a>
                    <a class="mdl-navigation__link" href="<?php echo url('/vakken'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i>Vakken overzicht</a>
                    <a class="mdl-navigation__link" href="<?php echo url('/nieuwepvi'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">note_add</i>Nieuwe PVI</a>
                </nav>
            </div>
            <main class="mdl-layout__content mdl-color--grey-100">
            <?php echo $body; ?>
            </main>
        </div>
        
        <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    </body>
</html>