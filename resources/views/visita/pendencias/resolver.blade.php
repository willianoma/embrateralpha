@extends('mdl')

@section('content')
    {{-- {{dump($pendencia)}} --}}
    {{-- {{dump($visita)}}--}}


    <div class="mdl-grid mdl-cell--12-col">
        <div class=" mdl-card  mdl-cell--12-col mdl-shadow--8dp ">

            <span class="alert alert-success" style="text-align: center"><b>RESOLVER PENDÊNCIA</b></span>

            <div class="mdl-cell--12-col mdl-card__supporting-text">


                <form method="POST" action="/pendencias/store">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idvisita" value="{{$visita->id}}">
                    <input type="hidden" name="idpendencia" value="{{$pendencia->id}}">
                    <input type="hidden" name="tipovisita" value="{{$pendencia->tipovisita}}">
                    <input type="hidden" name="pendenciaold" value="{{$visita->pendencias}}">


                    <div>
                        <label>ID Pendencia: #{{$pendencia->id}}</label>
                    </div>

                    <div>
                        <label>ID Visita: #{{$visita->id}}</label>
                    </div>

                    <div>
                        <label>Tipo de visita: {{$pendencia->tipovisita}}</label>
                    </div>

                    <div>
                        <label>Empresa: {{$visita->getEmpresa->razaosocial}}</label>
                    </div>

                    <div>
                        <label> Usuário responsável: {{$visita->getUsuario->name}}</label>
                    </div>


                    <div>
                        <label>Descrição da visita: {{$visita->descricao}}</label>
                    </div>

                    <div>
                        <label>Historico Pendencias:</label>
                        @foreach($todaspendencias as $pend)
                            <div>{{$pend->created_at}} - {{$pend->getusuario->name}}
                                - {{$pend->novadescricao}}</div>
                        @endforeach
                    </div>

                    <div>
                        <label>Nova Descrição:</label>
                    </div>
                    <div>

                        <textarea class="mdl-textfield__input" type="text"
                                  id="descricao"
                                  name="novadescricao"
                                  style="height: 100px"></textarea>
                        {{--<textarea name="novadescricao"></textarea>--}}

                    </div>


                    @if($pendencia->tipovisita == 'geral')

                        <div class="mdl-grid mdl-cell--12-col mdl-card__supporting-text ">

                            <div class="mdl-cell mdl-cell--6-col" style="text-align: center">
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="concluido">
                                    <input class="mdl-radio__button" id="concluido" name="status" type="radio"
                                           value="concluido"
                                           @if(Input::old('status')=='concluido') checked @endif
                                    >
                                    <span class="mdl-radio__label">Concluido</span>
                                </label>
                            </div>

                            <div class="mdl-cell mdl-cell--6-col" style="text-align: center">
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pendente">
                                    <input class="mdl-radio__button" id="pendente" name="status" type="radio"
                                           value="pendente"
                                           @if(Input::old('status')=='pendente') checked @endif
                                    >
                                    <span class="mdl-radio__label">Pendente</span>
                                </label>
                            </div>

                        </div>

                    @endif

                    @if($pendencia->tipovisita == 'individual')

                        <div class="mdl-grid mdl-cell--12-col mdl-card__supporting-text ">

                            <div class="mdl-cell mdl-cell--3-col" style="text-align: center">
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="operacional">
                                    <input class="mdl-radio__button" id="operacional" name="status" type="radio"
                                           value="operacional"
                                           @if(Input::old('status')=='operacional') checked @endif
                                    >
                                    <span class="mdl-radio__label">Operacional</span>
                                </label>
                            </div>

                            <div class="mdl-cell mdl-cell--3-col" style="text-align: center">
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="analise">
                                    <input class="mdl-radio__button" id="analise" name="status" type="radio"
                                           value="analise"
                                           @if(Input::old('status')=='analise') checked @endif
                                    >
                                    <span class="mdl-radio__label">Análise</span>
                                </label>
                            </div>

                            <div class="mdl-cell mdl-cell--3-col" style="text-align: center">
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="manutencao">
                                    <input class="mdl-radio__button" id="manutencao" name="status" type="radio"
                                           value="manutencao"
                                           @if(Input::old('status')=='manutencao') checked @endif
                                    >
                                    <span class="mdl-radio__label">Manutenção</span>
                                </label>
                            </div>

                            <div class="mdl-cell mdl-cell--3-col" style="text-align: center">
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ausente">
                                    <input class="mdl-radio__button" id="ausente" name="status" type="radio"
                                           value="ausente"
                                           @if(Input::old('status')=='ausente') checked @endif
                                    >
                                    <span class="mdl-radio__label">Ausente</span>
                                </label>
                            </div>

                        </div>

                    @endif


                    <div class="mdl-cell mdl-cell--12-col">
                        <input type="submit" value="Cadastrar"
                               class="btn btn-success btn-lg btn-block">
                    </div>

                    <div class="mdl-cell mdl-cell--12-col">
                        <a href="/pendencias" class="btn btn-warning btn-lg btn-block">Voltar</a>
                    </div>


                </form>
            </div>

        </div>

    </div>

@endsection