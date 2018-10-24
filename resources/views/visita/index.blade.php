@extends('layout')

@section('header')


@endsection

@section('content')

    <?php

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set("America/Sao_Paulo");

    ?>
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


    <div class="demo-card-square mdl-card mdl-shadow--6dp mdl-cell  ">

        <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Hondas</h2>
        </div>

        {{--  <div style="margin-right: 40px; margin-top: 10px">
              <a class="btn btn-success pull-right" href="/visita/criar/undefined"><i
                          class="glyphicon glyphicon-plus "></i> Novo</a>
          </div>--}}

        <div class="mdl-card__supporting-text mdl-grid mdl-cell--12-col ">

            <table class="table table-responsible mdl-shadow--2dp mdl-cell mdl-cell--12-col">
                <thead>

                <tr>

                    {{-- <th style="width: 30px">Id</th>--}}
                    {{--<td>Usuario</td>--}}
                    <th><b>Posto</b></th>
                    <th><b>Data</b></th>
                    {{--<td>horasaida</td>--}}
                    {{-- <td>pendencias</td>--}}
                    {{--<td>descricao</td>--}}
                    {{--  <td>geolocalizacao</td>--}}
                    <th><b>Status</b></th>
                    {{--td>assinatura</td>--}}
                    {{-- <th>Ação</th>--}}


                </tr>
                </thead>

                <tbody>
                @foreach($visitas as $visita)

                    {{--<tr  onclick="location.href = 'http://www.site.com';" style="cursor: hand;">--}}
                    <tr>
                        {{-- <td>{{$visita->id}}</td>--}}
                        {{-- <td>{{$visita->getusuario->name}}</td>--}}
                        <td><a href="/visita/ver/{{$visita->id}}">{{$visita->getposto->nome}}</a></td>
                        <td>
                           {{-- <dd>{{date("d/m/Y D", strtotime($visita->horainicio))}}</dd>--}}
                            <dd>{{strftime('%d de %B de %Y, %A ', strtotime($visita->horainicio))}}</dd>
                        </td>
                        <td>
                        <span class="pull-right">

                        @if($visita->status == 'concluido')
                                <span class=" label label-success">Concluído</span>
                    </span>
                            @endif

                            @if($visita->status == 'pendente')
                                <span class=" label label-danger">Pendente</span>
                                </span>
                            @endif

                        </td>
                        {{--<td>{{$visita->assinatura}}</td>--}}


                        {{--  <td>
                              <a class="btn btn-xs btn-info" href="/visita/ver/{{$visita->id}}"><i
                                          class="glyphicon glyphicon-edit"></i> Detalhes</a>
                              --}}{{--<a class="btn btn-xs btn-warning" href="/visita/editar/{{$visita->id}}"><i
                                          class="glyphicon glyphicon-edit"></i> Edit</a>--}}{{--
                              <form action="/visita/deletar/{{$visita->id}}" method="GET"
                                    style="display: inline;"
                                    onsubmit="if(confirm('Deletar ({{$visita->id}})?')) { return true } else {return false };">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <button type="submit" class="btn btn-xs btn-danger"><i
                                              class="glyphicon glyphicon-trash"></i> Delete
                                  </button>
                              </form>
                          </td>--}}
                    </tr>

                @endforeach

                </tbody>
            </table>
            <?php echo $visitas->render();?>
        </div>

    </div>




    {{--
       {{$visita->idempresa}}
       {{$visita->horainicio}}
       {{$visita->obs}}
       {{$visita->pendencias}}
       {{$visita->assinatura}}
       {{$visita->idusuario}}
       {{$visita->servico}}
       {{$visita->geolocalizacao}}
       {{$visita->status}}
       {{$visita->assinatura}}
--}}



@endsection

