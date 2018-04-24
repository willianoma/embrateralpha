@extends('layout')


@section('content')

    <script>
        function imprimir() {
            var imprimiconteudo = document.getElementById('impressao').innerHTML,
                tela_impressao = window.open('');
            tela_impressao.document.write(imprimiconteudo);
            tela_impressao.window.print();//abre janela de impressão
            tela_impressao.window.close();//fecha janela de impressão após imprimir ou cancelar
        }
    </script>

    <!-- Square card -->
    <style>
        .demo-card-square.mdl-card {
            width: 100%;
            height: auto;
        }

        .demo-card-square > .mdl-card__title {
            color: #fff;
            background: bottom right 15% no-repeat #46B6AC;
        }

        @media only screen and (max-width: 479px) {
            .mobilenome {
                font-size: 12px;
            }

            .mobileposto {
                font-size: 10px;
            }

            #fotofuncionario {
                display: none;
            }

        }
    </style>
    <div class="mdl-cell mdl-cell--12-col">
        <div class="mdl-cell mdl-cell--12-col">
            <nav aria-label="Seletor Mes">
                <ul class="pagination justify-content-end">
                    <li class="page-item"><a class="page-link"
                                             href="/funcionarios/aniversariantes/{{$mescontrole-1}}">Anterior</a></li>
                    <li class="page-item active"><a class="page-link" href="#">{{$mescomposto}}</a></li>
                    <li class="page-item"><a class="page-link"
                                             href="/funcionarios/aniversariantes/{{$mescontrole+1}}">Próximo</a></li>
                </ul>
            </nav>
        </div>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">
                    Aniversariantes do Mês

                </h2>
            </div>


            <div class="mdl-card__supporting-text">


                <ul class="demo-list-two mdl-list">

                    @foreach($aniversariantesMes as $aniversariante)

                        <li class="mdl-list__item mdl-list__item--two-line">
                                    <span class="mdl-list__item-primary-content">


                                      <i id="fotofuncionario" class="material-icons mdl-list__item-icon">
                                           <div>
                                               <img height="50" width="50" src="{{asset("$aniversariante->foto")}}">
                                          </div>
                                      </i>


                                      <span id="nomefuncionario"> <a class="mobilenome"
                                                                     href="/funcionarios/{{$aniversariante->id}}">{{$aniversariante->nome}}</a></span>
                                      <span id="idade"
                                            class="mdl-list__item-sub-title"><i
                                                  class="mobileposto">{{$aniversariante->posto}}</i></span>
                                    </span>
                            <span class="mdl-list__item-secondary-content">
                                      <span id='nascimento'
                                            class="badge mdl-list__item-secondary-info ">{{$aniversariante->nascimento}}</span>
                                         <span id='nascimento'
                                               class="badge mdl-list__item-secondary-info">{{$aniversariante->idade}}</span>
                               </span>
                        </li>
                    @endforeach
                </ul>


            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onclick="imprimir()">
                    Imprimir
                </a>
            </div>
        </div>
    </div>





@endsection

<div hidden id="impressao">

    <div style="text-align: right">
        <h2>Aniversariantes do mês : {{$mescomposto}}</h2>
    </div>
    <div style="width: 100%; border-bottom: 1px solid #000000;">
    </div>

    <div style="text-align: center; padding-top: 10px">
        <table>
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Posto</th>
                <th scope="col">Nascimento</th>
            </tr>
            </thead>
            <tbody>
            @foreach($aniversariantesMes as $aniversariante)
                <tr>
                    <th> {{$aniversariante->nome}}</th>
                    <td>{{$aniversariante->posto}}</td>
                    <td>{{$aniversariante->nascimento}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
</div>


{{--

@section('content')
    <div class="mdl-cell mdl-cell--12-col">

        <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Aniversariantes do Mês {{$mescomposto}}</h2>
        </div>

        <ul class="demo-list-two mdl-list">

            @foreach($aniversariantesMes as $aniversariante)

                <li class="mdl-list__item mdl-list__item--two-line">
                                    <span class="mdl-list__item-primary-content">
                                      <i id="fotofuncionario" class="material-icons mdl-list__item-avatar">person</i>
                                      <span id="nomefuncionario"> <a
                                                  href="/funcionarios/{{$aniversariante->id}}">{{$aniversariante->nome}}</a></span>
                                      <span id="idade"
                                            class="mdl-list__item-sub-title">{{$aniversariante->posto}}</span>
                                    </span>
                    <span class="mdl-list__item-secondary-content">
                                      <span id='nascimento'
                                            class="badge mdl-list__item-secondary-info">{{$aniversariante->nascimento}}</span>
                                         <span id='nascimento'
                                               class="badge mdl-list__item-secondary-info">{{$aniversariante->idade}}</span>
                    </span>
                </li>

            @endforeach
        </ul>
    </div>

@endsection--}}
