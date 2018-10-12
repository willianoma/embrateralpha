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
                <h2 class="mdl-card__title-text">Pendencias</h2>
            </div>


            <div class="mdl-card__supporting-text mdl-grid mdl-cell--12-col ">

                <table class="table table-responsible mdl-shadow--2dp mdl-cell--12-col">
                    <thead>

                    <tr>

                        <th style="width: 30px">Id</th>
                        <td>usuario</td>
                        <td>idvisita</td>
                        <td>Empresa</td>

                        <td>Tipo</td>
                        <td>status</td>
                        <th>Ação</th>


                    </tr>
                    </thead>
                    <?php
                    // dd($pendencias->getempresa[0]->razaosocial);
                    ?>
                    <tbody>


                    {{--    foreach ($pendencias as $pen) {
                        echo '<br>';
                        $empresa = Empresa::FindOrFail($pen->getVisitaGeral[0]->idempresa);
                        echo $empresa->razaosocial;
                        }--}}


                    @foreach($pendencias as $pendencia)

                        {{--{{$empresa = $pendencia->getVisitaGeral[0]->idempresa}}--}}

                        <tr>

                            <td>{{$pendencia->id}}</td>
                            <td>{{$pendencia->iduser}}</td>
                            <td>{{$pendencia->idvisita}}</td>
                            <td>
                                <?php
                                //refatorar isso... Ver Relacionamento nas models 3 tabelas
                                foreach ($empresas as $empresa) {
                                    if ($empresa->id == $pendencia->getVisitaGeral[0]->idempresa) {
                                        echo $empresa->razaosocial;
                                    }
                                }
                                ?>
                            </td>
                            <td>{{$pendencia->tipovisita}}</td>
                            <td>{{$pendencia->status}}</td>
                            {{--<td>{{$pendencia->assinatura}}</td>--}}

                            <td>
                                <a class="btn btn-xs btn-info" href="/visitageral/editar/{{$pendencia->idvisita}}"><i
                                            class="glyphicon glyphicon-edit"></i> Resolver</a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
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



@endsection

