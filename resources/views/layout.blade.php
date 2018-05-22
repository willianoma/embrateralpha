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

    <?php
    setlocale(LC_ALL, 'pt_BR'); //
    date_default_timezone_set("America/Sao_Paulo");

    ?>

    {{--BootStrap--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    {{--EndBootStrap--}}

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
    <link rel="stylesheet" href="/css/mdlstyles.css">
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
            <span class="mdl-layout-title">@yield('header')</span>
            <div class="mdl-layout-spacer"></div>

            {{-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                 <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                     <i class="material-icons">search</i>
                 </label>
                 <div class="mdl-textfield__expandable-holder">
                     <input class="mdl-textfield__input" type="text" id="search">
                     <label class="mdl-textfield__label" for="search">Enter your query...</label>
                 </div>
             </div>--}}

            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                <li class="mdl-menu__item"><a href="/auth/logout">Sair</a></li>
            </ul>
        </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
            <img src="/images/guest.png" class="demo-avatar">
            <div class="demo-avatar-dropdown">
                <span>{{ Auth::user()->email }}</span>
                <div class="mdl-layout-spacer"></div>
                <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">arrow_drop_down</i>
                    <span class="visuallyhidden">Accounts</span>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">

                    <li class="mdl-menu__item"><a href="/auth/logout">Sair</a></li>

                </ul>
            </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
            <a class="mdl-navigation__link" href="/home"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                            role="presentation">home</i>Home</a>

            <a class="mdl-navigation__link" href="/funcionarios"><i class="mdl-color-text--blue-grey-400 material-icons"
                                                                    role="presentation">people</i>Funcionários</a>


            <a class="mdl-navigation__link" href="/funcionarios/aniversariantes/{{date('m')}}"><i
                        class="mdl-color-text--blue-grey-400 material-icons"
                        role="presentation">cake</i>Aniversariantes</a>

            @if( Auth::user()->email == 'willianoma@hotmail.com')
                <a class="mdl-navigation__link" href="/auth/showusers"><i
                            class="mdl-color-text--blue-grey-400 material-icons"
                            role="presentation">assignment</i>Usuarios</a>
            @endif

            <div class="mdl-layout-spacer"></div>
            {{--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>--}}
        </nav>
    </div>


    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">


                @yield('content')

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
