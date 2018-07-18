@extends('layout')

@section('header')
    <style>
        label {
            margin-top: 5px;
        }

        #btn-cadastrar {
            margin-top: 10px;
            width: 100%;
        }
    </style>
    <h7>ASSOCIAR FILHO</h7>

@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form method="POST" action="/funcionarios/storeassociarfilho">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        <div class="col-md-12">
                            <label>Associar Funcionário</label>
                            <select class="form-control" id="funcionario-filho" name="funcionario-filho">
                                @if(isset($funcionario))
                                    <option selected value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
                                @endif
                                @foreach($funcionarios as $funcionario)
                                    <option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <label>Nome Filho</label>
                            <input class="form-control" type="text" id="nome-filho" name="nome-filho">
                        </div>

                        <div class="col-md-6">
                            <label>Nascimento</label>
                            <input class="form-control" type="date" id="nascimento-filho" name="nascimento-filho">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <input class="btn btn-success" type="submit" name="Cadastrar" value="Cadastrar"
                               id="btn-cadastrar">
                    </div>

                </form>

                <hr>

                <div class="col-md-12" id="lista_associados_geral">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp col-md-12">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">id</th>
                            <th>Nome Filhos</th>
                            <th>Nascimento</th>
                            <th>Funcionario</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($filhos as $filho)
                            <tr>
                                <td>{{$filho->id}}</td>
                                <td>{{$filho->nome}}</td>
                                <td>{{$filho->nascimento}}</td>
                                <td>{{$filho->getFuncionario->nome}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

                <hr>

            </div>
        </div>
@endsection