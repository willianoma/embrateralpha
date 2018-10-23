@extends('layoutsite')


@section('content')


    <!-- Square card -->
    <style>
        .demo-card-square.mdl-card {
            width: auto;
            height: auto;

        }

        .demo-card-square > .mdl-card__title {
            color: #fff;
            background: no-repeat #46B6AC;

        }


    </style>

    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">


        <div class="demo-card-square mdl-card mdl-shadow--6dp">
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">A EMPRESA</h2>
            </div>
            <div class="mdl-card__supporting-text" style="width: 100%;">
                <p align='justify'>
                    Com o alto padrão e excelência, a Embrater oferece serviços de diaristas profissionais para limpeza
                    e
                    conservação residenciais, seja ela casa ou apartamento, limpeza de condomínios, pequenas empresas e
                    escritórios,
                    além de limpeza pós-obra.
                    Todos estes serviços com o compromisso e a garantia de satisfação e agilidade, acompanhado por
                    supervisores para
                    que você se concentre no que realmente lhe interessa.
                    A Embrater está à disposição como empresa modelo no seguimento de limpeza no Estado de Alagoas para
                    suprir a sua
                    necessidade. Deixe o serviço pesado com a gente.
                </p>
            </div>

        </div>

    </div>








    {{--

    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--3dp">

        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">A empresa:</h4>
        </div>
        <div class="mdl-card__supporting-text">
            <span class="mdl-typography--font-light mdl-typography--subhead"><p align='justify'>
                                     Com o alto padrão e excelência, a Embrater oferece serviços de diaristas profissionais para limpeza e
        conservação residenciais, seja ela casa ou apartamento, limpeza de condomínios, pequenas empresas e escritórios,
        além de limpeza pós-obra.
        Todos estes serviços com o compromisso e a garantia de satisfação e agilidade, acompanhado por supervisores para
        que você se concentre no que realmente lhe interessa.
        A Embrater está à disposição como empresa modelo no seguimento de limpeza no Estado de Alagoas para suprir a sua
        necessidade. Deixe o serviço pesado com a gente.
                </p>
            </span>
        </div>
        --}}{{--  <div class="mdl-card__actions">
              <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                  Saiba Mais
                  <i class="material-icons">chevron_right</i>
              </a>
          </div>--}}{{--
    </div>
--}}

@endsection