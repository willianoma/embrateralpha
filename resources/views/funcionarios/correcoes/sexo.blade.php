<?php
/*var_dump($funcionarios);
die();*/

?>

@extends('layout')



@section('content')


    <table class="table">
        <thead>
        <tr>
            <th class="col-md-1">#</th>
            <th class="col-md-6">Nome</th>
            <th class="col-md-2">Sexo</th>
            <th class="col-md-2">Função</th>
        </tr>
        </thead>
        <tbody>

        @foreach($funcionarios as $funcionario)
            {{--/funcionarios/correcoes/updatesexo/{{$funcionario->id}}--}}
            <form action="#" method="POST" id="aa">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <tr>
                    <th scope="row"><label name="idfuncionario">{{$funcionario->id}}</label></th>
                    <td>{{$funcionario->nome}}</td>
                    <td> @include('funcionarios.partials.sexo')</td>

                    {{--<td><a onclick="updateSexo({!!$funcionario->id!!})" class="btn btn-default">Atualizar</a></td>--}}

                    <td><input type="submit" id="atualizar" name="atualizar" value="Atualizar"></td>
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

        var frm = $('#aa');

        frm.submit(function (e) {
            e.preventDefault();
            alert("ola");

        });
    </script>

@endsection