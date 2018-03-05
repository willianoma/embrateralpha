@extends('layout')

@section('content')

    <!-- Square card -->
    <style>
        .demo-card-square.mdl-card {
            width: auto;
            height: auto;
            margin-bottom: 30px;
        }

        .demo-card-square > .mdl-card__title {
            color: #fff;
            background: bottom right 15% no-repeat #337ab7;
        }
    </style>

    <style>
        .demo-list-two {
            width: auto;
        }

        #nomefuncionario {
            font-size: 16px;
        }

        #idade {
            font-size: 14px;
            background-color: #a6e1ec;
            height: 30px;
            padding-top: 25%;

        }

        @media only screen and (max-width: 768px) {
            /* For mobile phones: */

            .demo-list-two {
                width: 115%;
            }
            .mdl-list__item{
                overflow: unset;
            }

            #nomefuncionario {
                font-size: 12px;

            }

            #idade {
                font-size: 10px;
                background-color: #a6e1ec;
                height: 25px;
                padding-top: 30%;

            }
            #nascimentofuncionario{
                font-size: 10px;


            }
            #fotofuncionario{
               display: none;
            }
        }

    </style>


    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="col-md-6">

                    <div class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">Aniversariantes do Mês</h2>
                        </div>
                        <div class="mdl-card__supporting-text">

                            @foreach($aniversariantes as $aniversariante)

                                <ul class="demo-list-two mdl-list">
                                    <li class="mdl-list__item mdl-list__item--two-line">
                                    <span  class="mdl-list__item-primary-content">
                                      <i id="fotofuncionario" class="material-icons mdl-list__item-avatar">person</i>
                                      <span id="nomefuncionario"> {{$aniversariante->nome}}</span>
                                      <span id="nascimentofuncionario" class="mdl-list__item-sub-title">{{$aniversariante->nascimento}}</span>
                                    </span>
                                        <span class="mdl-list__item-secondary-content">
                                      <span id='idade'
                                            class="badge mdl-list__item-secondary-info">{{$aniversariante->idade}}</span>
                                    </span>
                                    </li>
                                </ul>

                            @endforeach

                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                View Updates
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">


                    <div class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">Funcionários Afastados</h2>
                        </div>
                        <div class="mdl-card__supporting-text">

                            <div>
                                <div>
                                    <b>02</b>
                                </div>
                                <div>
                                    Antonio Domingos Correia Filho
                                </div>
                            </div>

                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                View Updates
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>



@endsection










{{--

--------------OLD----------------
<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">
           <div class="panel panel-default">
               <div class="panel-heading">Home</div>

               <div class="panel-body">
               <label style="text-align: center;width: 100%; font-weight: 800;">
                   SISTEMA DE GESTÃO EMPRESARIAL VERSÃO ALPHA.
                   <br>
                   Escolha uma opção no menu superior.
                   <br>
                   <br>
                   Usuário: {{ Auth::user()->name }}
               </label>
               </div>
           </div>
       </div>
   </div>
</div>
   --}}