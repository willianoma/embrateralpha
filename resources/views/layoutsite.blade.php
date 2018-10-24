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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Embrater - Embresa Brasileira de Terceirização">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.png">
    <title>EMBRATER</title>

    <!-- Page styles -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="css/site.css">
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


<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">


    <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" href="/" src="images/site/logoembraterhorizontal.png">
          </span>
            <!-- Add spacer, to align navigation to the right in desktop -->
            <div class="android-header-spacer mdl-layout-spacer"></div>

            <div class="android-navigation-container">
                <nav class="android-navigation mdl-navigation">
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/">HOME</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/sobrenos">SOBRE NÓS</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/servicos">SERVIÇOS</a>
                    {{--      <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/galeria">GALERIA</a>--}}
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/contato">CONTATOS</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/home">LOGIN</a>
                </nav>
            </div>
            <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" href="/" src="images/site/logoembraterhorizontal.png">
          </span>


        </div>
    </div>

    <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" href="/" src="images/site/Logobranca.png">
        </span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/">HOME</a>
            <a class="mdl-navigation__link" href="/sobrenos">SOBRE NÓS</a>
            <a class="mdl-navigation__link" href="/servicos">SERVIÇOS</a>
            {{--  <a class="mdl-navigation__link" href="/galeria">GALERIA</a>--}}
            <a class="mdl-navigation__link" href="/contato">CONTATOS</a>
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/home">LOGIN</a>
            <div class="android-drawer-separator"></div>


        </nav>


    </div>

    <div class="android-content mdl-layout__content">


        @yield('content')


        <footer class="android-footer mdl-mega-footer">

            <div class="row" style="text-align: center">

                <div class="col-md-4 pull-left">
                    <a href="https://www.instagram.com/embrateral"><i class="fab fa-instagram fa-5x"></i></a>
                    &nbsp;
                    &nbsp;


                    <a href="https://www.facebook.com/embrater"><i class="fab fa-facebook fa-5x"></i></a>

                    &nbsp;
                    &nbsp;

                    <a href="mailto:contato@embrater.com"><i class="far fa-envelope fa-5x"></i></a>


                </div>

                <div class="col-md-4 pull-center">
                    <i class="fas fa-map-marker-alt"></i>
                    <a href="https://www.google.com.br/maps/place/Embrater+Limpeza+E+Terceiriza%C3%A7%C3%A3o/@-9.65676,-35.7383681,17z/data=!4m8!1m2!2m1!1sembrater!3m4!1s0x0:0x3e94583464802cf!8m2!3d-9.6559444!4d-35.736161">Rua
                        Íris Alagoense, 86 - Maceió-AL</a>
                </div>

                <div class="col-md-4 pull-right">
                    <div>
                        <i class="fas fa-headset fa-lg"></i>
                        <a href="tel:08233278358"> (82) 3327-8358</a>
                    </div>
                    <div>
                        <i class="fab fa-whatsapp fa-lg"></i>
                        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5582996900182."> (82) 99690-0182</a>
                    </div>
                    <div>
                        <i class="fas fa-envelope fa-lg"></i>
                        <a href="mailto:contato@embrater.com"> contato@embrater.com</a>
                    </div>
                </div>


            </div>

            <div class="mdl-mega-footer--middle-section" style="text-align: center">
                <p class="mdl-typography--font-light pull-right">Embrater: 2018 Maceió - AL</p>
            </div>

        </footer>

    </div>
    @if($_SERVER["REQUEST_URI"] <> '/contato')

        <div id='fale'>
            <a style="margin-top: 20px" href="/contato" id="view-source"
               class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-600 mdl-color-text--accent-contrast">FALE
                CONOSCO
            </a>
        </div>
    @endif
</div>
</body>
</html>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

