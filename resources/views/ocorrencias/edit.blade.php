@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Ocorrencias / Edit #{{$ocorrencia->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('ocorrencias.update', $ocorrencia->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('usuario')) has-error @endif">
                       <label for="usuario-field">Usuario</label>
                    <input type="text" id="usuario-field" name="usuario" class="form-control" value="{{ $ocorrencia->usuario }}"/>
                       @if($errors->has("usuario"))
                        <span class="help-block">{{ $errors->first("usuario") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('posto')) has-error @endif">
                       <label for="posto-field">Posto</label>
                    <input type="text" id="posto-field" name="posto" class="form-control" value="{{ $ocorrencia->posto }}"/>
                       @if($errors->has("posto"))
                        <span class="help-block">{{ $errors->first("posto") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ocorrencia')) has-error @endif">
                       <label for="ocorrencia-field">Ocorrencia</label>
                    <input type="text" id="ocorrencia-field" name="ocorrencia" class="form-control" value="{{ $ocorrencia->ocorrencia }}"/>
                       @if($errors->has("ocorrencia"))
                        <span class="help-block">{{ $errors->first("ocorrencia") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ocorrencia_descricao')) has-error @endif">
                       <label for="ocorrencia_descricao-field">Ocorrencia_descricao</label>
                    <input type="text" id="ocorrencia_descricao-field" name="ocorrencia_descricao" class="form-control" value="{{ $ocorrencia->ocorrencia_descricao }}"/>
                       @if($errors->has("ocorrencia_descricao"))
                        <span class="help-block">{{ $errors->first("ocorrencia_descricao") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ocorrencia_data')) has-error @endif">
                       <label for="ocorrencia_data-field">Ocorrencia_data</label>
                    <input type="text" id="ocorrencia_data-field" name="ocorrencia_data" class="form-control" value="{{ $ocorrencia->ocorrencia_data }}"/>
                       @if($errors->has("ocorrencia_data"))
                        <span class="help-block">{{ $errors->first("ocorrencia_data") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('funcionarios_envolvido')) has-error @endif">
                       <label for="funcionarios_envolvido-field">Funcionarios_envolvido</label>
                    <input type="text" id="funcionarios_envolvido-field" name="funcionarios_envolvido" class="form-control" value="{{ $ocorrencia->funcionarios_envolvido }}"/>
                       @if($errors->has("funcionarios_envolvido"))
                        <span class="help-block">{{ $errors->first("funcionarios_envolvido") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('fiscal_responsavel')) has-error @endif">
                       <label for="fiscal_responsavel-field">Fiscal_responsavel</label>
                    <input type="text" id="fiscal_responsavel-field" name="fiscal_responsavel" class="form-control" value="{{ $ocorrencia->fiscal_responsavel }}"/>
                       @if($errors->has("fiscal_responsavel"))
                        <span class="help-block">{{ $errors->first("fiscal_responsavel") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('anexos')) has-error @endif">
                       <label for="anexos-field">Anexos</label>
                    <input type="text" id="anexos-field" name="anexos" class="form-control" value="{{ $ocorrencia->anexos }}"/>
                       @if($errors->has("anexos"))
                        <span class="help-block">{{ $errors->first("anexos") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('ocorrencias.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection