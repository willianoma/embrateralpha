@extends('mdl')

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
                <h2 class="mdl-card__title-text">Visitas Gerais</h2>
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

                    @foreach($pendenciasVisitasGeral as $pendenciaVisitasGeral)


                        <tr>
                            {{--   <td>{{$pendenciaVisitasGeral->id}}</td>--}}
                            {{-- <td>{{$pendenciaVisitasGeral->getVisitaGeral->getUsuario->name}}</td>--}}
                            <td>
                                <a href="/pendencias/resolver/{{$pendenciaVisitasGeral->id}}">{{$pendenciaVisitasGeral->getVisitaGeral->getEmpresa->razaosocial}}</a>
                            </td>

                            <td>{{$pendenciaVisitasGeral->getVisitaGeral->descricao}}</td>

                            <td>{{$pendenciaVisitasGeral->getVisitaGeral->pendencias}}</td>
                            {{--  <td>{{$pendenciaVisitasGeral->tipovisita}}</td>--}}
                            {{--<td>{{$pendenciaVisitasGeral->updated_at}}</td>--}}
                            <td><a href="/visitageral/ver/{{$pendenciaVisitasGeral->idvisita}}">#{{$pendenciaVisitasGeral->idvisita}}</a></td>
                            {{-- <td>{{$pendenciaVisitasGeral->assinatura}}</td>--}}

                            {{--<td>
                                <a class="btn btn-xs btn-info"
                                   href="/pendencias/resolver/{{$pendenciaVisitasGeral->id}}"><i
                                            class="glyphicon glyphicon-edit"></i> Resolver</a>

                            </td>--}}
                        </tr>

                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>



    <div class="mdl-cell--12-col">
        <div class="demo-card-square mdl-card mdl-shadow--6dp mdl-cell ">
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Visitas Individuais</h2>
            </div>

            <div class="mdl-card__supporting-text mdl-grid mdl-cell--12-col ">

                <table class="table table-responsible mdl-shadow--2dp mdl-cell--12-col">

                    <thead>

                    <tr>

                        {{--<th style="width: 30px">Id</th>--}}
                       {{-- <td>Usuário</td>--}}
                        <td>Empresa</td>
                        {{--<td>Equipamento</td>--}}
                        <td>Descrição</td>
                        <td>Data</td>
                        <td>status</td>
                        {{--<th>Ação</th>--}}

                    </tr>
                    </thead>

                    <tbody>


                    @foreach($pendenciasVisitasIndividual as $pendenciaVisitasIndividual)

                        <tr>
                            {{--<td>{{$pendenciaVisitasIndividual->id}}</td>--}}
                           {{-- <td>{{$pendenciaVisitasIndividual->getVisitaIndividual->getUsuario->name}}</td>--}}

                            <td>{{$pendenciaVisitasIndividual->getVisitaIndividual->getEmpresa->razaosocial}}


                            {{--<td>
                                {{$pendenciaVisitasIndividual->getVisitaIndividual->getEquipamento->tipo}}
                                / {{$pendenciaVisitasIndividual->getVisitaIndividual->getEquipamento->nomerede}}
                            </td>--}}


                            <td>{{$pendenciaVisitasIndividual->getVisitaIndividual->pendencias}}</td>
                            <td>{{$pendenciaVisitasIndividual->updated_at}}</td>
                            <td>{{$pendenciaVisitasIndividual->status}}</td>


                            {{-- <td>{{$pendenciaVisitasIndividual->id}}</td>
                             <td>{{$pendenciaVisitasIndividual->getVisitaIndividual->getUsuario->name}}</td>
                             <td>{{$pendenciaVisitasIndividual->getVisitaIndividual->getEmpresa->razaosocial}}</td>
                             <td>
                                 {{$pendenciaVisitasIndividual->getVisitaIndividual->getEquipamento->tipo}}
                                 / {{$pendenciaVisitasIndividual->getVisitaIndividual->getEquipamento->nomerede}}
                             </td>
                             <td>{{$pendenciaVisitasIndividual->getVisitaIndividual->pendencias}}</td>
                             <td>{{$pendenciaVisitasIndividual->updated_at}}</td>
                             <td>{{$pendenciaVisitasIndividual->status}}</td>--}}

                          {{--  <td>
                                <a class="btn btn-xs btn-info"
                                   href="/pendencias/resolver/{{$pendenciaVisitasIndividual->id}}"><i
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
                <td>Tipo Visita</td>
                <td>Empresa</td>
                <td>Resolução</td>
                <td>Data</td>
                {{--<td>Status</td>--}}

            </tr>


            @foreach($pendenciasconcluidas as $pendenciasconcluida)
                <tr>
                    {{--@if($pendenciasconcluida->tipovisita == 'geral')
                        <td>
                            <a href="/visitageral/ver/{{$pendenciasconcluida->getVisitaGeral->id}}">{{$pendenciasconcluida->id}}</a>
                        </td>
                    @endif

                    @if($pendenciasconcluida->tipovisita == 'individual')
                        <td>
                            <a href="/visitaindividual/ver/{{$pendenciasconcluida->getVisitaIndividual->id}}">{{$pendenciasconcluida->id}}</a>
                        </td>
                    @endif--}}

                    <td>{{$pendenciasconcluida->tipovisita}}</td>
                    @if($pendenciasconcluida->tipovisita == 'geral')
                        <td>{{$pendenciasconcluida->getVisitaGeral->getEmpresa->razaosocial}}</td>
                    @endif
                    @if($pendenciasconcluida->tipovisita == 'individual')
                        <td>{{$pendenciasconcluida->getVisitaIndividual->getEmpresa->razaosocial}}</td>
                    @endif
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

