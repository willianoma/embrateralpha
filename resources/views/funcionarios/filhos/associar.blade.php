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
                <form>
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
                    <div class="row">

                        <div class="col-md-12">
                            <label>Associar Funcionário</label>
                            <select class="form-control" id="funcionario-filho" name="funcionario-filho">

                                @if(isset($funcionariopost))
                                    <option selected value="{{$funcionariopost}}">{{$funcionariopost}}</option>
                                @endif
                                @foreach($funcionarios as $funcionario)
                                    <option value="{{$funcionario->name}}">{{$funcionario->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <input class="btn btn-success" type="submit" name="Cadastrar" value="Cadastrar"
                                   id="btn-cadastrar">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection