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


        <table class="table mdl-cell--12-col mdl-data-table mdl-js-data-table mdl-shadow--2dp table-striped">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="mdl-cell mdl-cell--6-col text-left">Nome</th>
                <th scope="col" class="mdl-cell mdl-cell--2-col text-right">Ação</th>
            </tr>
            </thead>
            <tbody>

            @foreach($funcionariosSemFoto as $funcionarioSemFoto)
                <tr>
                    <th class="mdl-cell mdl-cell--6-col text-left">{{$funcionarioSemFoto['nome']}}</th>
                    <th class="mdl-cell mdl-cell--2-col text-right"><input type="file"></th>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection