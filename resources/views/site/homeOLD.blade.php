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
            <img class="android-logo-image" href="/"  src="images/site/logoembraterhorizontal.png">
          </span>
            <!-- Add spacer, to align navigation to the right in desktop -->
            <div class="android-header-spacer mdl-layout-spacer"></div>
        {{--  <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
              <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                  <i class="material-icons">search</i>
              </label>
              <div class="mdl-textfield__expandable-holder">
                  <input class="mdl-textfield__input" type="text" id="search-field">
              </div>
          </div>--}}
        <!-- Navigation -->
            <div class="android-navigation-container">
                <nav class="android-navigation mdl-navigation">
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/">HOME</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/sobrenos">SOBRE NÓS</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/servicos">SERVIÇOS</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/galeria">GALERIA</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="/contato">CONTATOS</a>
                </nav>
            </div>
            <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" href="/" src="images/site/logoembraterhorizontal.png">
          </span>

            {{--<button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
                    id="more-button">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                <li class="mdl-menu__item">5.0 Lollipop</li>
                <li class="mdl-menu__item">4.4 KitKat</li>
                <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
                <li class="mdl-menu__item">Android History</li>
            </ul>--}}
        </div>
    </div>

    <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image"  href="/"  src="images/site/Logobranca.png">
        </span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/">HOME</a>
            <a class="mdl-navigation__link" href="/sobrenos">SOBRE NÓS</a>
            <a class="mdl-navigation__link" href="/servicos">SERVIÇOS</a>
            <a class="mdl-navigation__link" href="/galeria">GALERIA</a>
            <a class="mdl-navigation__link" href="/contato">CONTATOS</a>
            <div class="android-drawer-separator"></div>


        </nav>
    </div>

    <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
            {{-- <div class="logo-font android-slogan">be together. not the same.</div>
             <div class="logo-font android-sub-slogan">welcome to android... be yourself. do your thing. see what's going
                 on.
             </div>
             <div class="logo-font android-create-character">
                 <a href=""><img src="images/site/andy.png"> create your android character</a>
             </div>

             <a href="#screens">
                 <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                     <i class="material-icons">expand_more</i>
                 </button>
             </a>--}}
        </div>


        <div class="android-more-section">
            <div class="android-section-title mdl-typography--display-1-color-contrast">NOSSOS SERVIÇOS</div>
            <div class="android-card-container mdl-grid">
                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="images/site/Limpezaresidencial.png">
                    </div>
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Residencial</h1>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead"><p align='justify'>A Embrater dispõe de faxineiros(as) capacitados  e de confiança, com os melhores preços para lhe dar maior comodidade na limpeza da sua casa.</p></span>
                    </div>
                    {{--<div class="mdl-card__actions">
                        <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                            Saiba Mais
                            <i class="material-icons">chevron_right</i>
                        </a>
                    </div>--}}
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="images/site/Condominal.png">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Condominial</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead"><p align='justify'>Para deixar seu condomínio limpo e agradável, a Embrater oferece o melhor plano de limpeza do mercado. Consulte-nos.</p></span>
                    </div>
                    {{--  <div class="mdl-card__actions">
                          <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                              Saiba Mais
                              <i class="material-icons">chevron_right</i>
                          </a>
                      </div>--}}
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="images/site/Empresarial.png">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Escritórios</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead"><p align='justify'>Um ambiente de trabalho limpo e confortável é imprescindível para bons resultados. Pensando nisso, a Embrater criou um plano especial para você, empreendedor. </p></span>
                    </div>
                    {{-- <div class="mdl-card__actions">
                         <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                             Saiba Mais
                             <i class="material-icons">chevron_right</i>
                         </a>
                     </div>--}}
                </div>

                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                        <img src="images/site/Limpeza-Pos-Obra.png">
                    </div>
                    <div class="mdl-card__title">
                        <h4 class="mdl-card__title-text">Pós-Obra</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <span class="mdl-typography--font-light mdl-typography--subhead"><p align='justify'>Após construções e reformas, sempre é necessário uma faxina com profissionais capacitados. Mas não se preocupe com isso, deixe o serviço pesado com a gente.</p></span>
                    </div>
                    {{--   <div class="mdl-card__actions">
                           <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                               Saiba Mais
                               <i class="material-icons">chevron_right</i>
                           </a>
                       </div>--}}
                </div>
            </div>
        </div>


        <div class="android-customized-section">
            <div class="android-customized-section-image"></div>
        </div>


        <footer class="android-footer mdl-mega-footer">

            <div class="row">

                <div class="col-md-4 pull-left">
                    <i class="fab fa-instagram fa-5x"></i>


                    <i class="fab fa-facebook fa-5x"></i>

                    &nbsp;
                    <i class="far fa-envelope fa-5x"></i>

                </div>

                <div class="col-md-4 pull-center">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Rua Íris Alagoense, 86 - Maceió-AL</span>
                </div>

                <div class="col-md-4 pull-right">
                    <div>
                        <i class="fas fa-headset fa-lg"></i>
                        <span> (82) 3327-8358</span>
                    </div>
                    <div>
                        <i class="fab fa-whatsapp fa-lg"></i>
                        <span> (82) 99690-0182</span>

                    </div>
                </div>


            </div>

            <div class="mdl-mega-footer--middle-section">
                <p class="mdl-typography--font-light">Embrater: 2018 Maceió - AL</p>
            </div>


        </footer>
    </div>
</div>
<a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/android-dot-com/" target="_blank"
   id="view-source"
   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-600 mdl-color-text--accent-contrast">FALE
    CONOSCO
</a>

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

