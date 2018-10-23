@extends('layoutsite')


@section('content')

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

@endsection