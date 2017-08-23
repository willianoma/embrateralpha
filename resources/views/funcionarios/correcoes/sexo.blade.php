<?php
/*var_dump($funcionarios);
die();*/

?>

@extends('layout')



@section('content')
    <form action="/funcionarios/correcoes/updatesexo" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <table class="table">
            <thead>
            <tr>
                <th class="col-md-1">#</th>
                <th class="col-md-6">Nome</th>
                <th class="col-md-3">Sexo</th>
            </tr>
            </thead>
            <tbody>

            @foreach($funcionarios as $funcionario)

                <tr>
                    <th scope="row">{{$funcionario->id}}</th>
                    <td>{{$funcionario->nome}}</td>
                    <td> @include('funcionarios.partials.sexo')</td>

                </tr>
            @endforeach

            </tbody>
        </table>

        <input type="submit">
    </form>
@endsection