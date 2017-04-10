@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Motivos / {{trans('crud.edit')}} #{{$motivo->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('motivos.update', $motivo->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('descricao')) has-error @endif">
                       <label for="descricao-field">{{trans('motivos.desc')}}</label>
                    <input type="text" id="descricao-field" name="descricao" class="form-control" value="{{ $motivo->descricao }}"/>
                       @if($errors->has("descricao"))
                        <span class="help-block">{{ $errors->first("descricao") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('obs')) has-error @endif">
                       <label for="obs-field">{{trans('motivos.obs')}}</label>
                    <input type="text" id="obs-field" name="obs" class="form-control" value="{{ $motivo->obs }}"/>
                       @if($errors->has("obs"))
                        <span class="help-block">{{ $errors->first("obs") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('motivos.index') }}"><i class="glyphicon glyphicon-backward"></i>  {{trans('crud.back')}}</a>
                </div>
            </form>

        </div>
    </div>
@endsection