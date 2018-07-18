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

    <script>
        function buscar() {
            var idFunc = document.getElementById("funcionario-filho").value;
            window.location = "/funcionarios/associarfilho/" + idFunc;

        }

    </script>

    <script>
        function deletarFilho() {
            var idFilho = document.getElementById("id-filho").value;
            alert(idFilho);
            // window.location = "/funcionarios/associarfilho/" + idFunc;
        }
    </script>

@endsection

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form method="POST" action="/funcionarios/storeassociarfilho">
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        <div class="col-md-12">

                            <label>Associar Funcionário</label>
                        </div>

                        <div class="col-md-10">
                            <select class="form-control" id="funcionario-filho" name="funcionario-filho">
                                @if(isset($funcionario))
                                    <option selected value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
                                    <option></option>
                                @endif
                                @foreach($funcionarios as $funcionario)
                                    <option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <button type="button" class="form-control btn btn-warning" onclick="buscar()">Buscar
                            </button>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <label>Nome Filho</label>
                            <input required class="form-control" type="text" id="nome-filho" name="nome-filho">
                        </div>

                        <div class="col-md-6">
                            <label>Nascimento</label>
                            <input required class="form-control" type="date" id="nascimento-filho"
                                   name="nascimento-filho">
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
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($filhos as $filho)

                            <tr>

                                <td>{{$filho->id}}</td>
                                <td>{{$filho->nome}}</td>
                                <td>{{$filho->nascimento}}</td>
                                <td>{{$filho->getFuncionario->nome}}</td>
                                <td>
                                    <form action="/funcionarios/destroyfilho/{{$filho->id}}"
                                          onsubmit="if(confirm('Deseja excluir {{$filho->nome}}?')) { return true } else {return false };">


                                        <button class="btn btn-danger" onclick="deletarFilho()">Deletar</button>
                                    </form>

                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>

                <hr>

            </div>
        </div>
@endsection