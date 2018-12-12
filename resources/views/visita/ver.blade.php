@extends('layout')


@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script>
        $(document).ready(function () {
            var panels = $('.user-infos');
            var panelsButton = $('.dropdown-user');
            panels.hide();

            //Click dropdown
            panelsButton.click(function () {
                //get data-for attribute
                var dataFor = $(this).attr('data-for');
                var idFor = $(dataFor);

                //current button
                var currentButton = $(this);
                idFor.slideToggle(400, function () {
                    //Completed slidetoggle
                    if (idFor.is(':visible')) {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                    }
                    else {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                    }
                })
            });


            /*  $('[data-toggle="tooltip"]').tooltip();

             $('button').click(function (e) {
             e.preventDefault();
             alert("This is a demo.\n :-)");
             });*/
        });
    </script>

    <script type="text/css">
        .user-row {
            margin-bottom: 14px;
        }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }

        .table-user-information > tbody > tr > td {
            border-top: 0;
        }

    </script>



    <div class="container">


        <div class="row" style="margin-top: 10px">
            <div
                    class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading ">
                        <span id="idvisita" class="panel-title">RONDA #{{$visita->id}}</span>
                        <span class="pull-right">

                        @if($visita->status == 'concluido')
                                <span class="panel-title label label-success">concluído</span>
                    </span>
                        @endif

                        @if($visita->status == 'pendente')

                            <span class="panel-title label label-danger"><a
                                        href="/pendencias/resolver/{{$lastPendencia->id}}">Pendente</a></span>
                            </span>
                        @endif


                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                <img class="img-circle"
                                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                     alt="User Pic">
                            </div>
                            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                <img class="img-circle"
                                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                                     alt="User Pic">
                            </div>

                            {{--MOBILE--}}
                            <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                <span style="font-size: 20px; "><strong>{{$posto->nome}}</strong></span>
                                <hr>
                                <dl>
                                    <dt>Data</dt>
                                    <dd>{{date("d/m/Y", strtotime($visita->horainicio))}}</dd>
                                    <dt>Usuário Responsável</dt>
                                    <dd>{{$usuario->name}}</dd>
                                    <dt>Descrição</dt>
                                    <dd> {{$visita->descricao}}</dd>


                                    <dt>
                                        Atualizações
                                    </dt>
                                    <dd class="dropdown-user" data-for=".pendencias">
                                        <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                                    </dd>

                                    <div class=" user-infos pendencias">
                                        @foreach($pendencias as $pendencia)
                                            <dd>
                                                Usuário: {{$pendencia->getusuario->name}}
                                            </dd>
                                            <dd>
                                                Data:  {{strftime('%d de %B de %Y, %A ', strtotime($pendencia->created_at))}}
                                            </dd>
                                            <dd>
                                                Descricao: {{$pendencia->novadescricao}}
                                            </dd>
                                         {{--   <dd>
                                                Status: {{$pendencia->status}}
                                            </dd>--}}
                                            <hr>
                                        @endforeach
                                    </div>


                                    <div>
                                        <dt>Hora de Inicio</dt>
                                        <dd>{{date("d/m/y h:i A", strtotime($visita->horainicio))}}</dd>
                                        <dt>Hora de Saída</dt>
                                        <dd>{{date("d/m/y h:i A", strtotime($visita->horasaida))}}</dd>
                                        <dt>Duração</dt>
                                        <dd>{{$duracao}}m</dd>
                                        <dt>Registro</dt>
                                        <dd>{{date("d/m/Y h:i A", strtotime($visita->created_at))}}</dd>


                                    </div>

                                </dl>
                            </div>

                            {{--DESKTOP--}}
                            <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <span style="font-size: 20px; "><strong>{{$posto->razaosocial}}</strong></span>

                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>

                                        <td>Data</td>
                                        <td>{{date("d/m/Y", strtotime($visita->horainicio))}}</td>
                                    </tr>
                                    <tr>
                                        <td>Usuário Responsável</td>
                                        <td>{{$usuario->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Descricao</td>
                                        <td>{{$visita->descricao}}</td>
                                    </tr>
                                    <tr>
                                        <td>Atualizações</td>
                                        <td class="dropdown-user" data-for=".pendencias">
                                            <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                                        </td>
                                    </tr>
                                    <td></td>
                                    <td>

                                        <div class="row user-infos pendencias">
                                            <table>

                                                @foreach($pendencias as $pendencia)
                                                    <tr>
                                                        <td>
                                                            <dd>
                                                                <strong>Usuário:</strong> {{$pendencia->getusuario->name}}
                                                            </dd>
                                                            <dd>
                                                                <strong>Data:</strong> {{strftime('%d de %B de %Y, %A ', strtotime($pendencia->created_at))}}
                                                            </dd>
                                                            <dd>
                                                                <strong>Descricao:</strong> {{$pendencia->novadescricao}}
                                                            </dd>
                                                         {{--   <dd>
                                                                <strong> Status:</strong> {{$pendencia->status}}
                                                            </dd>--}}
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </table>

                                        </div>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td>Hora de Inicio</td>
                                        <td>{{date("d/m/y h:i A", strtotime($visita->horainicio))}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hora de Saída</td>
                                        <td>{{date("d/m/y h:i A", strtotime($visita->horasaida))}}</td>
                                    </tr>
                                    <tr>
                                        <td>Duração</td>
                                        <td>{{$duracao}}m</td>

                                    </tr>
                                    <tr>
                                        <td>Registro</td>
                                        <td>{{date("d/m/Y h:i A", strtotime($visita->created_at))}}</td>
                                    </tr>

                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <dd>
                            <div id="mapa1" style="width: 100%; height: 150px;">
                                {!! Mapper::render() !!}
                            </div>
                        </dd>
                    </div>
                    <div style="height: 50px" class="panel-footer">


                        @if( Auth::user()->permissao == 'admin' )
                            <div class="pull-left">


                                <button onclick="location.href='/visitageral/ver/{{$visita->id-1}}'"
                                        class="btn btn-sm btn-success" type="button"><i
                                            class="glyphicon glyphicon-arrow-left"></i></button>

                                <button onclick="location.href='/visitageral/ver/{{$visita->id+1}}'"
                                        class="btn btn-sm btn-success" type="button"><i
                                            class="glyphicon glyphicon-arrow-right"></i></button>

                            </div>
                        @endif

                        <div class="pull-right">
                            @if( Auth::user()->email == 'willianoma@hotmail.com')

                                <button onclick="location.href='/visitageral/sendemailvisita/{{$visita->id}}'"
                                        class="btn btn-sm btn-primary" type="button"
                                        data-toggle="tooltip"
                                        data-original-title="Remove this user"><i
                                            class="glyphicon glyphicon-envelope"></i></button>

                                <button class="btn btn-sm btn-warning" type="button"
                                        data-toggle="tooltip"
                                        data-original-title="Edit this user"><i
                                            class="glyphicon glyphicon-print"></i></button>



                                <form action="/visita/deletar/{{$visita->id}}" method="GET"
                                      style="display: inline;"
                                      onsubmit="if(confirm('Deletar ({{$visita->id}})?')) { return true } else {return false };">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit"
                                            class="btn btn-sm btn-danger" type="button"
                                            data-toggle="tooltip"
                                            data-original-title="Remove this user"><i
                                                class="glyphicon glyphicon-trash"></i></button>
                                    </button>
                                </form>




                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection
