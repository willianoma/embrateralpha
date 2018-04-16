@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Postos / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('postos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('nome')) has-error @endif">
                    <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ old("nome") }}"/>
                    @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('endereco')) has-error @endif">
                    <label for="endereco-field">Endereco</label>
                    <input type="text" id="endereco-field" name="endereco" class="form-control"
                           value="{{ old("endereco") }}"/>
                    @if($errors->has("endereco"))
                        <span class="help-block">{{ $errors->first("endereco") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('qtdfunc')) has-error @endif">
                    <label for="endereco-field">Quantidade de Funcionários</label>
                    <input type="text" id="qtdfunc-field" name="qtdfunc" class="form-control"
                           value="{{ old("qtdfunc") }}"/>
                    @if($errors->has("qtdfunc"))
                        <span class="help-block">{{ $errors->first("qtdfunc") }}</span>
                    @endif
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('postos.index') }}"><i
                                class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection