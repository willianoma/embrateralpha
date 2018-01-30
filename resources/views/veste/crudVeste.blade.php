@extends('layout')

@section('content')


    <form method="post" action="/veste/storeveste">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group col-md-2">
                    <label style="text-align: center; width: 100%; margin-top: 5px">Novo Tipo Veste</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" id="tipoveste" name="tipoveste" class="form-control" required>

                </div>

                <div class="form-group col-md-2">
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






@endsection