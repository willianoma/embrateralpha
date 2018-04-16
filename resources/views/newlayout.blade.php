<!doctype html>
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
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="css/mdlstyles.css">
    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Home</span>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search">
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                <li class="mdl-menu__item">About</li>
                <li class="mdl-menu__item">Contact</li>
                <li class="mdl-menu__item">Legal information</li>
            </ul>
        </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
            <img src="images/user.jpg" class="demo-avatar">
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
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">home</i>Home</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">inbox</i>Inbox</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">delete</i>Trash</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">report</i>Spam</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">forum</i>Forums</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">flag</i>Updates</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">local_offer</i>Promos</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">shopping_cart</i>Purchases</a>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">people</i>Social</a>
            <div class="mdl-layout-spacer"></div>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
    </div>
    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">

                {{-- Inicio Charts--}}

                {!! Charts::assets() !!}
                <div class="mdl-cell mdl-cell--2-col">{!! $uncisalChart->render() !!}</div>
                <div class="mdl-cell mdl-cell--2-col">{!! $hdtChart->render() !!}</div>
                <div class="mdl-cell mdl-cell--2-col">{!! $santaMonicaChart->render() !!}</div>
                <div class="mdl-cell mdl-cell--2-col">{!! $portugalRamalhoChart->render() !!}</div>
                <div class="mdl-cell mdl-cell--2-col">{!! $etsalChart->render() !!}</div>
                <div class="mdl-cell mdl-cell--2-col">{!! $reservaChart->render() !!}</div>

                {{-- FIM Charts--}}

            </div>

            <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                <div>
                    <div class="mdl-cell mdl-cell--12-col">{!! $geralChart->render() !!}</div>


                </div>

            </div>
            <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
                <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                    <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                        <h2 class="mdl-card__title-text">Aniversários</h2>
                    </div>
                    <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                        Março/2018 - 15 Aniversariantes este mês!
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Listar Todos</a>
                    </div>
                </div>
                <div class="demo-separator mdl-cell--1-col"></div>
                <div class="demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
                    <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">

                        <h2 class="mdl-card__title-text">Sumário</h2>
                        <hr style="height:1px; border:none;  background-color:#7d7c80; margin-top:5px; margin-bottom: 10px;"/>

                        <ul>
                            <li>
                                <span class="mdl-checkbox__label">Cadastrados:</span>
                                <span class="mdl-checkbox__label">220</span>
                            </li>
                            <li>
                                <span class="mdl-checkbox__label">Ativos:</span>
                                <span class="mdl-checkbox__label">200</span>
                            </li>
                            <li>
                                <span class="mdl-checkbox__label">Ferias:</span>
                                <span class="mdl-checkbox__label">4</span>
                            </li>
                            <li>
                                <span class="mdl-checkbox__label">INSS:</span>
                                <span class="mdl-checkbox__label">8</span>
                            </li>
                            <li>
                                <span class="mdl-checkbox__label">Maternidade:</span>
                                <span class="mdl-checkbox__label">6</span>
                            </li>
                        </ul>
                    </div>
                    {{--<div class="mdl-card__actions mdl-card--border">
                        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">Change
                            location</a>
                        <div class="mdl-layout-spacer"></div>
                        <i class="material-icons">location_on</i>
                    </div>--}}
                </div>
            </div>
        </div>
    </main>
</div>


<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>

{{--@yield('content')--}}


{{-- INICIO Graficos do layout MDL


                               <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1"
                                    class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--2-col-desktop">
                                   <use xlink:href="#piechart" mask="url(#piemask)"/>
                                   <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle"
                                         dy="0.1">82
                                       <tspan font-size="0.2" dy="-0.07">%</tspan>
                                   </text>

                                   <text x="0.5" y="1.0" font-family="Roboto" font-size="0.1" fill="#888" text-anchor="middle"
                                         dy="0.1">UNCISAL
                                   </text>

                               </svg>
                               <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1"
                                    class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--2-col-desktop">
                                   <use xlink:href="#piechart" mask="url(#piemask)"/>
                                   <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle"
                                         dy="0.1">82
                                       <tspan dy="-0.07" font-size="0.2">%</tspan>
                                   </text>

                                   <text x="0.5" y="1.0" font-family="Roboto" font-size="0.1" fill="#888" text-anchor="middle"
                                         dy="0.1">H.E.H.A
                                   </text>

                               </svg>
                               <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1"
                                    class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--2-col-desktop">
                                   <use xlink:href="#piechart" mask="url(#piemask)"/>
                                   <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle"
                                         dy="0.1">82
                                       <tspan dy="-0.07" font-size="0.2">%</tspan>
                                   </text>

                                   <text x="0.5" y="1.0" font-family="Roboto" font-size="0.1" fill="#888" text-anchor="middle"
                                         dy="0.1">Portual Ramalho
                                   </text>
                               </svg>
                               <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1"
                                    class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--2-col-desktop">
                                   <use xlink:href="#piechart" mask="url(#piemask)"/>
                                   <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle"
                                         dy="0.1">82
                                       <tspan dy="-0.07" font-size="0.2">%</tspan>
                                   </text>

                                   <text x="0.5" y="1.0" font-family="Roboto" font-size="0.1" fill="#888" text-anchor="middle"
                                         dy="0.1">Santa Monica
                                   </text>
                               </svg>
                               <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1"
                                    class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--2-col-desktop">
                                   <use xlink:href="#piechart" mask="url(#piemask)"/>
                                   <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle"
                                         dy="0.1">82
                                       <tspan dy="-0.07" font-size="0.2">%</tspan>
                                   </text>

                                   <text x="0.5" y="1.0" font-family="Roboto" font-size="0.1" fill="#888" text-anchor="middle"
                                         dy="0.1">ETSAL
                                   </text>
                               </svg>
                               <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1"
                                    class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--2-col-desktop">
                                   <use xlink:href="#piechart" mask="url(#piemask)"/>
                                   <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle"
                                         dy="0.1">82
                                       <tspan dy="-0.07" font-size="0.2">%</tspan>
                                   </text>

                                   <text x="0.5" y="1.0" font-family="Roboto" font-size="0.1" fill="#888" text-anchor="middle"
                                         dy="0.1">Reservas
                                   </text>
                               </svg>


Inicio Circulo
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
     style="position: fixed; left: -1000px; height: -1000px;">
    <defs>
        <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx="0.5" cy="0.5" r="0.49" fill="white"/>
            <circle cx="0.5" cy="0.5" r="0.40" fill="black"/>
        </mask>
        <g id="piechart">
            <circle cx="0.5" cy="0.5" r="0.5"/>
            <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)"/>
        </g>
    </defs>
</svg>
FIM Inicio Circulo

FIM Graficos do layout MDL--}}
