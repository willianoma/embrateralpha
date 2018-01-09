@extends('layout')
@section('header')
<div class="page-header">
        <h1>Ocorrencias / Show #{{$ocorrencia->id}}</h1>
        <form action="{{ route('ocorrencias.destroy', $ocorrencia->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('ocorrencias.edit', $ocorrencia->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$ocorrencia->usuario}}</p>
                </div>
                    <div class="form-group">
                     <label for="posto">POSTO</label>
                     <p class="form-control-static">{{$ocorrencia->posto}}</p>
                </div>
                    <div class="form-group">
                     <label for="ocorrencia">OCORRENCIA</label>
                     <p class="form-control-static">{{$ocorrencia->ocorrencia}}</p>
                </div>
                    <div class="form-group">
                     <label for="ocorrencia_descricao">OCORRENCIA_DESCRICAO</label>
                     <p class="form-control-static">{{$ocorrencia->ocorrencia_descricao}}</p>
                </div>
                    <div class="form-group">
                     <label for="ocorrencia_data">OCORRENCIA_DATA</label>
                     <p class="form-control-static">{{$ocorrencia->ocorrencia_data}}</p>
                </div>
                    <div class="form-group">
                     <label for="funcionarios_envolvido">FUNCIONARIOS_ENVOLVIDO</label>
                     <p class="form-control-static">{{$ocorrencia->funcionarios_envolvido}}</p>
                </div>
                    <div class="form-group">
                     <label for="fiscal_responsavel">FISCAL_RESPONSAVEL</label>
                     <p class="form-control-static">{{$ocorrencia->fiscal_responsavel}}</p>
                </div>
                    <div class="form-group">
                     <label for="anexos">ANEXOS</label>
                     <p class="form-control-static">{{$ocorrencia->anexos}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('ocorrencias.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection