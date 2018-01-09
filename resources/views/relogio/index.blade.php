@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1><i class="glyphicon glyphicon-align-justify"></i> Relogio / Index </h1>
    </div>
@endsection

@section('content')


        <div class="col-sm-12">
            <h1 class="form-control label label-info">Selecionar Posto para exportar planilha</h1>
        </div>
        <div class="col-sm-12">

            <form method=" get" action="relogio/exportar/{postoselecionado}">

                <select class="form-control" name="postoselecionado" id="postoselecionado">
                    @foreach($postos as $posto)
                        <option>{{$posto->nome}}</option>
                    @endforeach
                    <option>Todos</option>
                </select>


                <input class="form-control btn-success" type="submit" value="Exportar">

            </form>
        </div>
@endsection