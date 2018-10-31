@extends('layout')

@section('header')

    <div class="clearfix">

        <span>Dashboard</span>

    </div>
@endsection



@section('content')

    <div class="demo-charts mdl-color--white mdl-shadow--2dp  mdl-grid ">

        {{-- Inicio Charts--}}

        {!! Charts::assets() !!}
        <div class="mdl-cell mdl-cell--2-col">{!! $uncisalChart->render() !!}</div>
        <div class="mdl-cell mdl-cell--2-col">{!! $hdtChart->render() !!}</div>
        <div class="mdl-cell mdl-cell--2-col">{!! $santaMonicaChart->render() !!}</div>
        <div class="mdl-cell mdl-cell--2-col">{!! $portugalRamalhoChart->render() !!}</div>
        <div class="mdl-cell mdl-cell--2-col">{!! $etsalChart->render() !!}</div>
        <div class="mdl-cell mdl-cell--2-col">{!! $reservaChart->render() !!}</div>
        <div class="mdl-cell mdl-cell--12-col">
            <div class="row" style="text-align: center">
                <div class="mdl-cell--4-col">
                    Vaga Ocupada
                    <svg width="40" height="12">
                        <rect width="400" height="100" style="fill: rgb(77, 182, 172);"/>
                    </svg>
                </div>
                <div class="mdl-cell--4-col">
                    Vaga Disponivel
                    <svg width="40" height="12">
                        <rect width="400" height="100" style="fill: rgb(50, 205, 50);"/>
                    </svg>
                </div>
                <div class="mdl-cell--4-col">
                    Sobressalente
                    <svg width="40" height="12">
                        <rect width="400" height="100" style="fill: rgb(178, 34, 34);"/>
                    </svg>
                </div>
            </div>
        </div>


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
                {{date('F')}}/{{date('Y')}} - {{$qtdAniversariantes}} Aniversariantes este mês!
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a href="/funcionarios/aniversariantes/{{date('m')}}"
                   class="mdl-button mdl-js-button mdl-js-ripple-effect">Listar
                    Todos</a>
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
                        <span class="mdl-checkbox__label">{{$sumario['Cadastrados']}}</span>
                    </li>
                    <li>
                        <span class="mdl-checkbox__label">Ativos:</span>
                        <span class="mdl-checkbox__label">{{$sumario['Ativos']}}</span>
                    </li>
                    <li>
                        <span class="mdl-checkbox__label">Inativos:</span>
                        <span class="mdl-checkbox__label">{{$sumario['Inativos']}}</span>
                    </li>
                    <li>
                        <span class="mdl-checkbox__label">Ferias:</span>
                        <span class="mdl-checkbox__label">{{$sumario['Ferias']}}</span>
                    </li>
                    <li>
                        <span class="mdl-checkbox__label">INSS:</span>
                        <span class="mdl-checkbox__label">{{$sumario['Inss']}}</span>
                    </li>
                    <li>
                        <span class="mdl-checkbox__label">Maternidade:</span>
                        <span class="mdl-checkbox__label">{{$sumario['Maternidade']}}</span>
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


@endsection

