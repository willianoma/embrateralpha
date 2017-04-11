@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Motivos
            <a class="btn btn-success pull-right" href="{{ route('motivos.create') }}"><i class="glyphicon glyphicon-plus"></i> {{trans('crud/crud.create')}}</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($motivos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{trans('crud/motivos.desc')}}</th>
                        <th>{{trans('crud/motivos.obs')}}</th>
                            <th class="text-right">{{trans('crud/crud.options')}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($motivos as $motivo)
                            <tr>
                                <td>{{$motivo->id}}</td>
                                <td>{{$motivo->descricao}}</td>
                    <td>{{$motivo->obs}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('motivos.show', $motivo->id) }}"><i class="glyphicon glyphicon-eye-open"></i> {{trans('crud/crud.show')}}</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('motivos.edit', $motivo->id) }}"><i class="glyphicon glyphicon-edit"></i> {{trans('crud/crud.edit')}}</a>
                                    <form action="{{ route('motivos.destroy', $motivo->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> {{trans('crud/crud.delete')}}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $motivos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection