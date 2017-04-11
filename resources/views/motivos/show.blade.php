@extends('layout')
@section('header')
    <div class="page-header">
        <h1>Motivos / {{trans('crud/crud.show')}} #{{$motivo->id}}</h1>
        <form action="{{ route('motivos.destroy', $motivo->id) }}" method="POST" style="display: inline;"
              onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('motivos.edit', $motivo->id) }}"><i
                            class="glyphicon glyphicon-edit"></i> {{trans('crud/crud.edit')}}</a>
                <button type="submit" class="btn btn-danger">{{trans('crud/crud.delete')}} <i
                            class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="descricao">{{trans('crud/motivos.desc')}}</label>
                    <p class="form-control-static">{{$motivo->descricao}}</p>
                </div>
                <div class="form-group">
                    <label for="obs">{{trans('crud/motivos.obs')}}</label>
                    <p class="form-control-static">{{$motivo->obs}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('motivos.index') }}"><i
                        class="glyphicon glyphicon-backward"></i> {{trans('crud/crud.back')}}</a>

        </div>
    </div>

@endsection