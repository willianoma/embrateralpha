@extends('layout')

@section('header')


@endsection

@section('content')
    <!-- Square card -->
    <style>
        .demo-card-square.mdl-card {
            width: 100%;
            height: auto;
        }

        .demo-card-square > .mdl-card__title {
            color: #fff;
            background: #46B6AC;
        }
    </style>




    <input type="hidden" name="_token" value="{{ csrf_token() }}">




    <div class="demo-card-square mdl-card mdl-shadow--6dp ">
        <div class="mdl-card__title ">
            <h2 class="mdl-card__title-text">Rondas Pendentes</h2>
        </div>

        <div class="  ">

            <table class="table table-responsible mdl-shadow--2dp mdl-cell--12">
                <thead>

                <tr>

                    {{--<th style="width: 30px">Id</th>--}}
                    {{--    <td>Usuário</td>--}}
                    <td>Posto</td>
                    <td>Descrição</td>
                    {{--    <td>Pendencia</td>--}}
                    {{--<td>Tipo</td>--}}
                    {{-- <td>Data</td>--}}
                    <td>Ronda</td>
                    {{-- <th>Ação</th>--}}

                </tr>
                </thead>

                <tbody>

                @foreach($pendenciasVisitas as $pendenciaVisitas)


                    <tr>
                        {{--   <td>{{$pendenciaVisitas->id}}</td>--}}
                        {{-- <td>{{$pendenciaVisitas->getVisita->getUsuario->name}}</td>--}}
                        <td>
                            <a href="/pendencias/resolver/{{$pendenciaVisitas->id}}">{{$pendenciaVisitas->getVisita->getPosto->nome}}</a>
                        </td>

                        <td>{{$pendenciaVisitas->getVisita->descricao}}</td>

                        {{--            <td>{{$pendenciaVisitas->getVisita->pendencias}}</td>--}}
                        {{--  <td>{{$pendenciaVisitas->tipovisita}}</td>--}}
                        {{--<td>{{$pendenciaVisitas->updated_at}}</td>--}}
                        <td>
                            <a href="/visita/ver/{{$pendenciaVisitas->idvisita}}">#{{$pendenciaVisitas->idvisita}}</a>
                        </td>
                        {{-- <td>{{$pendenciaVisitas->assinatura}}</td>--}}

                        {{--<td>
                            <a class="btn btn-xs btn-info"
                               href="/pendencias/resolver/{{$pendenciaVisitas->id}}"><i
                                        class="glyphicon glyphicon-edit"></i> Resolver</a>

                        </td>--}}
                    </tr>

                @endforeach

                </tbody>
            </table>

        </div>


    </div>


    <div class="demo-card-square mdl-card mdl-shadow--6dp ">
        <div class="mdl-card__title ">
            <h2 class="mdl-card__title-text">Concluidas  (em testes)</h2>
        </div>

        <div class="  ">

            <table class="table table-responsible mdl-shadow--2dp mdl-cell--12">
                <thead>

                <tr>

                    {{--<th style="width: 30px">Id</th>--}}
                    {{--    <td>Usuário</td>--}}
                    <td>Data</td>
                    <td>Posto</td>
                    <td>Descrição</td>

                    {{--    <td>Pendencia</td>--}}
                    {{--<td>Tipo</td>--}}
                    {{-- <td>Data</td>--}}

                    {{-- <th>Ação</th>--}}

                </tr>
                </thead>

                <tbody>

                @foreach($visitasPendentesConcluidas as $visitaPendenteConcluida)


                    <tr>
                        {{--   <td>{{$pendenciaVisitas->id}}</td>--}}
                        {{-- <td>{{$pendenciaVisitas->getVisita->getUsuario->name}}</td>--}}
                        <td>
                            {{strftime('%d de %B de %Y, %A ', strtotime($visitaPendenteConcluida->horainicio))}}
                        </td>
                        <td>
                            <a href="/visita/ver/{{$visitaPendenteConcluida->id}}">{{$visitaPendenteConcluida->getposto->nome}}</a>
                        </td>

                        {{--            <td>{{$pendenciaVisitas->getVisita->pendencias}}</td>--}}
                        {{--  <td>{{$pendenciaVisitas->tipovisita}}</td>--}}
                        {{--<td>{{$pendenciaVisitas->updated_at}}</td>--}}

                        <td>
                            {{$visitaPendenteConcluida->descricao}}
                        </td>

                        {{-- <td>{{$pendenciaVisitas->assinatura}}</td>--}}

                        {{--<td>
                            <a class="btn btn-xs btn-info"
                               href="/pendencias/resolver/{{$pendenciaVisitas->id}}"><i
                                        class="glyphicon glyphicon-edit"></i> Resolver</a>

                        </td>--}}
                    </tr>

                @endforeach

                </tbody>
            </table>

        </div>

    </div>


@endsection

