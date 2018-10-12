@extends('layout')

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


    <div class="mdl-cell--12-col">
        <div class="demo-card-square mdl-card mdl-shadow--6dp mdl-cell ">
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Visitas</h2>
            </div>

            <div class="mdl-card__supporting-text mdl-grid mdl-cell--12-col ">

                <table class="table table-responsible mdl-shadow--2dp mdl-cell--12-col">
                    <thead>

                    <tr>

                        {{--<th style="width: 30px">Id</th>--}}
                        {{--    <td>Usuário</td>--}}
                        <td>Empresa</td>
                        <td>Descrição</td>
                        <td>Pendencia</td>
                        {{--<td>Tipo</td>--}}
                        {{-- <td>Data</td>--}}
                        <td>Visita</td>
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

                            <td>{{$pendenciaVisitas->getVisita->pendencias}}</td>
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
    </div>


    <div class="mdl-cell--12-col demo-card-square  mdl-cell">
        <h4>
            Concluidas
        </h4>
    </div>
    <div class="mdl-cell--12-col demo-card-square mdl-card mdl-shadow--6dp mdl-cell">

        <table class="table table-responsible mdl-shadow--2dp mdl-cell--12-col">
            <tr style="font-weight: 800">

                {{--<td>ID</td>--}}
                <td>Status</td>
                <td>Id Visita</td>
                <td>Usuario</td>
                <td>Posto</td>
                <td>Descricao</td>
                <td>Data</td>

            </tr>


            @foreach($pendenciasconcluidas as $pendenciasconcluida)
                <tr>

                    <td>Concluidas</td>

                    {{--<td>{{$pendenciasconcluida->getPosto->nome}}</td>--}}
                    <td>{{$pendenciasconcluida->idvisita}}</td>
                    <td>{{$pendenciasconcluida->getUsuario->name}}</td>
                    <td>{{$pendenciasconcluida->getVisita->getPosto->nome}}</td>

                    <td>{{$pendenciasconcluida->novadescricao}}</td>
                    <td>{{$pendenciasconcluida->updated_at}}</td>
                    {{-- <td>{{$pendenciasconcluida->status}}</td>--}}


                </tr>

            @endforeach
        </table>
    </div>
    {{--
       {{$pendencia->idempresa}}
       {{$pendencia->horainicio}}
       {{$pendencia->obs}}
       {{$pendencia->pendencias}}
       {{$pendencia->assinatura}}
       {{$pendencia->idusuario}}
       {{$pendencia->servico}}
       {{$pendencia->geolocalizacao}}
       {{$pendencia->status}}
       {{$pendencia->assinatura}}
--}}
    <?php echo $pendenciasconcluidas->render(); ?>



@endsection

