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
<html lang="pt">
<head>
    {{-- @if(!empty($msg))
         <div class="alert alert-warning">
             <strong>Atenção: </strong> {{$msg}}
         </div>
     @endif--}}
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <style>
        .dropdown-item {
            font-size: 14px;
        }
    </style>

    <?php
    setlocale(LC_ALL, 'pt_BR'); //
    date_default_timezone_set("America/Sao_Paulo");

    ?>

    {{--Jquery--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <script type="text/javascript"
            src="http://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>


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
    <title>Embrater</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="/images/favicon.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="/images/favicon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="/images/favicon.png">

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
                                                                    role="presentation">people</i>
                Funcionários
            </a>


            <a class="mdl-navigation__link" href="/funcionarios/aniversariantes/{{date('m')}}"><i
                        class="mdl-color-text--blue-grey-400 material-icons"
                        role="presentation">cake</i>Aniversariantes</a>

            <a class="mdl-navigation__link" href="/visita/criar/undefined"><i
                        class="mdl-color-text--blue-grey-400 material-icons"
                        role="presentation">place</i>Ronda</a>

            <a class="mdl-navigation__link" href="/visita"><i
                        class="mdl-color-text--blue-grey-400 material-icons"
                        role="presentation">place</i>Listar Ronda</a>

            <a class="mdl-navigation__link" href="/pendencias"><i
                        class="mdl-color-text--blue-grey-400 material-icons"
                        role="presentation">place</i>Pendencias</a>

            @if( Auth::user()->email == 'willianoma@hotmail.com')
                <a class="mdl-navigation__link" href="/auth/showusers"><i
                            class="mdl-color-text--blue-grey-400 material-icons"
                            role="presentation">person</i>Usuarios</a>
                <a class="mdl-navigation__link" href="/postos"><i
                            class="mdl-color-text--blue-grey-400 material-icons"
                            role="presentation">location_on</i>Postos</a>
                <a class="mdl-navigation__link" href="/relogio"><i
                            class="mdl-color-text--blue-grey-400 material-icons"
                            role="presentation">import_export</i>Exportar Ponto</a>
                <a class="mdl-navigation__link" href="/veste/crudveste"><i
                            class="mdl-color-text--blue-grey-400 material-icons"
                            role="presentation">accessibility</i>Veste</a>




            @endif

            <div class="dropdown">
                <button class="btn mdl-color--blue-grey-800 nav-link mdl-navigation__link dropdown-toggle"
                        data-toggle="dropdown" type="button">
                    <i class="mdl-color-text--blue-grey-400 material-icons " role="presentation">event_note</i>
                    <span class=" mdl-color-text--blue-grey-200">Correções</span>

                </button>

                <ul class="dropdown-menu dropdown-menu-right mdl-color--blue-grey-900 ">
                    <li class="dropdown-item">
                        <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_a_photo</i>
                        <a class="mdl-color-text--blue-grey-100"
                           href="/funcionarios/correcoes/fotos">FOTOS</a>
                    </li>

                    <li class="dropdown-item">
                        <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">event_note</i>
                        <a class="mdl-color-text--blue-grey-100"
                           href="/funcionarios/correcoes/index">ITENS</a>
                        {{-- <a class="dropdown-item mdl-color-text--blue-grey-50" href="/funcionarios/correcoes/sexo">Sexo</a>--}}
                    </li>

                    <li class="dropdown-item">
                        <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">child_care</i>
                        <a class="mdl-color-text--blue-grey-100"
                           href="/funcionarios/associarfilho/undefined">ASSOCIAR FILHOS</a>
                        {{-- <a class="dropdown-item mdl-color-text--blue-grey-50" href="/funcionarios/correcoes/sexo">Sexo</a>--}}
                    </li>

                    <li class="dropdown-item">
                        <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">healing</i>
                        <a class="mdl-color-text--blue-grey-100"
                           href="/funcionarios/correcoes/insalubridade">INSALUBRIDADE</a>
                        {{-- <a class="dropdown-item mdl-color-text--blue-grey-50" href="/funcionarios/correcoes/sexo">Sexo</a>--}}
                    </li>
                </ul>
            </div>
            <div class="mdl-layout-spacer"></div>
            {{--<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons"
                                                       role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>--}}
        </nav>
    </div>


    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid ">

            @yield('content')


        </div>
    </main>

</div>


</body>
</html>

