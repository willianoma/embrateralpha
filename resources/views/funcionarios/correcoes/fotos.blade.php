@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h4>
            <i class="glyphicon glyphicon-align-justify"></i> Coreção de fotos
        </h4>

    </div>

@endsection

@section('content')

    <div class="mdl-cell mdl-cell--12-col">
        <form method="post">

            <div class="mdl-cell mdl-cell--12-col">
                <a>Escolha um posto</a>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
                <select name="posto" class="form-control">
                    @foreach($postos as $posto)
                        <option value="{{$posto->nome}}">{{$posto->nome}}</option>
                    @endforeach
                </select>

            </div>

            <div class="mdl-cell mdl-cell--12-col">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class='btn btn-success mdl-cell--12-col' type='submit' value="Buscar"> </input>
            </div>

        </form>


        <!-- Square card -->
        <style>
            .demo-card-square.mdl-card {
                width: auto;
                height: auto;
            }

            .demo-card-square > .mdl-card__title {
                color: #fff;
                background: bottom right 15% no-repeat #46B6AC;
            }

        </style>


        @foreach($funcionariosSemFoto as $funcionarioSemFoto)
            <div style="padding-bottom: 5px">
                <form method="POST" enctype="multipart/form-data"
                      action="/funcionarios/correcoes/fotos/update/{{$funcionarioSemFoto['id']}} ">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="demo-card-square mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">{{$funcionarioSemFoto['nome']}}</h2>
                        </div>

                        {{-- Modificar para https://github.com/kartik-v/bootstrap-fileinput--}}

                        <div class="mdl-card__supporting-text">
                            <input type="file" class="btn" name="profleimage">
                        </div>

                        <div class="mdl-card__actions mdl-card--border">
                            <a class="">
                                <input class="btn mdl-cell mdl-cell--12-col btn-warning" type="submit"
                                       value="Atualizar Foto">
                            </a>
                        </div>
                    </div>

                </form>
            </div>


        @endforeach


        {{--@foreach($funcionariosSemFoto as $funcionarioSemFoto)

            <form method="GET" action="/correcoes/updateFoto/?{{$funcionarioSemFoto['id']}}">
                <table class="">


                    <tr class="mdl-cell mdl-cell--12-col text-right">
                        <a class="mdl-cell mdl-cell--12-col text-left">{{$funcionarioSemFoto['nome']}}</a>
                    </tr>

                    <tr class="mdl-cell mdl-cell--12-col text-right">
                        <input class="btn mdl-cell mdl-cell--12-col " type="file">
                    </tr>

                    <tr class="mdl-cell mdl-cell--12-col text-right">
                        <input class="btn mdl-cell mdl-cell--12-col btn-warning" type="submit"
                               value="Atualizar Foto">
                    </tr>
                </table>

            </form>

        @endforeach
--}}

    </div>
@endsection