@extends('layout')

@section('content')

    <style type="text/css">
        hr {
            border-color: #aaa;
            box-sizing: border-box;
            width: 100%;
        }
    </style>

    <form method="post" action="/veste/storeveste">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group col-md-12">
                    <label style="text-align: center; width: 100%; margin-top: 5px">Novo Tipo Veste</label>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" id="tipoveste" name="tipoveste" class="form-control" required>

                </div>

                <div class="form-group col-md-12">
                    <input class="btn btn-success" style="width: 100%;" type="submit" value="Cadastrar">
                </div>

            </div>
        </div>
    </form>

    <table class="table table-responsive table-striped">
        <thead>
        <tr>

            <th>ID</th>
            <th>Tipo</th>
            <th>Opções</th>

        <tr/>
        </thead>
        <tbody>
        @foreach($vestes as $veste)
            <tr>
                <td>{{$veste->id}}</td>
                <td>{{$veste->tipo}}</td>
                <td>
                    <a class="btn btn-xs btn-warning" href=""><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <form action="/veste/deleteveste/{{$veste->id}}" method="GET" style="display: inline;"
                          onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">

                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>
                            Delete
                        </button>
                    </form>
                </td>
            <tr/>
        @endforeach
        </tbody>
    </table>


    <hr/>
    <div class="form-group col-md-12">
        <a>Views</a>
    </div>
    <div class="form-group col-md-12">
        <a href="/veste/entregarveste" class="btn btn-success">Entregar Veste</a>
    </div>
    <div class="form-group col-md-12">
        <a href="/veste/devolverveste" class="btn btn-success">Devolver Veste</a>
    </div>
    <div class="form-group col-md-12">
        <a href="/veste/listarentregarveste" class="btn btn-success">Listar Entrega Veste</a>
    </div>
    <div class="form-group col-md-12">
        <a href="/veste/listardevolverveste" class="btn btn-success">Listar Devolver Veste</a>
    </div>
    <div></div>
    </div>






@endsection