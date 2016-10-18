@extends('layout')
@section('header')
<div class="page-header">
        <h1>Atestadomedicos / Show #{{$atestadomedico->id}}</h1>
        <form action="{{ route('atestadomedicos.destroy', $atestadomedico->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('atestadomedicos.edit', $atestadomedico->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="usuario">USUARIO</label>
                     <p class="form-control-static">{{$atestadomedico->usuario}}</p>
                </div>
                    <div class="form-group">
                     <label for="funcionario">FUNCIONARIO</label>
                     <p class="form-control-static">{{$atestadomedico->funcionario}}</p>
                </div>
                    <div class="form-group">
                     <label for="posto">POSTO</label>
                     <p class="form-control-static">{{$atestadomedico->posto}}</p>
                </div>
                    <div class="form-group">
                     <label for="obs">OBS</label>
                     <p class="form-control-static">{{$atestadomedico->obs}}</p>
                </div>
                    <div class="form-group">
                     <label for="datainicio">DATAINICIO</label>
                     <p class="form-control-static">{{$atestadomedico->datainicio}}</p>
                </div>
                    <div class="form-group">
                     <label for="datafinal">DATAFINAL</label>
                     <p class="form-control-static">{{$atestadomedico->datafinal}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('atestadomedicos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection