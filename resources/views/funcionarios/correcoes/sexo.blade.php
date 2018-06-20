<?php
/*var_dump($funcionarios);
die();*/

?>

@extends('layout')



@section('content')


    <table class="table table-striped">

        <thead>
        <tr class="row">
            <th class="col-md-2">#</th>
            <th class="col-md-6">Nome</th>
            <th class="col-md-2">Sexo</th>
            <th class="col-md-2">Função</th>
        </tr>
        </thead>
        <tbody>
        <a id="teste">ola</a>
        @foreach($funcionarios as $funcionario)
            {{--/funcionarios/correcoes/updatesexo/{{$funcionario->id}}--}}
            <form action="#" method="POST" id="aa">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <tr class="row">

                    <th class="col-md-2">
                        <input id="idfuncionario" value="{{$funcionario->id}}"/>
                    </th>
                    <td class="col-md-6">
                        <a id="sexofuncionario" name="{{$funcionario->nome}}">{{$funcionario->nome}}</a>
                    </td>
                    <td class="col-md-2">
                        <a>@include('funcionarios.partials.sexo')</a>
                    </td>

                    {{--<td><a onclick="updateSexo({!!$funcionario->id!!})" class="btn btn-default">Atualizar</a></td>--}}

                    <td class="col-md-2">
                        <a class="btn btn-warning" id="Atualizar" onclick="atualizar()">Atualizar</a>
                    </td>
                </tr>

            </form>

        @endforeach

        </tbody>
    </table>


    {{--    <script>
            function updateSexo(id, sexo) {

                alert(id+sexo)
                $.ajax({
                    url: "/funcionarios/correcoes/updatesexo/id&sexo"
                }).done(function (data) {
                    console.log(data);
                });
            }

        </script>--}}

    <script type="text/javascript">

        function atualizar() {
            var id = document.getElementById("idfuncionario");
            var nome = document.getElementById("sexofuncionario");

            console.log(id.value);
            console.log(nome.name);

            /* alert(id.value+sexo)
             $.ajax({
             url: "/funcionarios/correcoes/updatesexo/id&sexo"
             }).done(function (data) {
             console.log(data);
             });*/
        }

    </script>

    {{--<script type="text/javascript">

        var frm = $('#aa');

        frm.submit(function (e) {
            e.preventDefault();
            alert("ola");

        });
    </script>--}}

@endsection