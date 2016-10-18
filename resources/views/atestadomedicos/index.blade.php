@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Atestadomedicos
            <a class="btn btn-success pull-right" href="{{ route('atestadomedicos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($atestadomedicos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USUARIO</th>
                        <th>FUNCIONARIO</th>
                        <th>POSTO</th>
                        <th>OBS</th>
                        <th>DATAINICIO</th>
                        <th>DATAFINAL</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($atestadomedicos as $atestadomedico)
                            <tr>
                                <td>{{$atestadomedico->id}}</td>
                                <td>{{$atestadomedico->usuario}}</td>
                    <td>{{$atestadomedico->funcionario}}</td>
                    <td>{{$atestadomedico->posto}}</td>
                    <td>{{$atestadomedico->obs}}</td>
                    <td>{{$atestadomedico->datainicio}}</td>
                    <td>{{$atestadomedico->datafinal}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('atestadomedicos.show', $atestadomedico->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('atestadomedicos.edit', $atestadomedico->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('atestadomedicos.destroy', $atestadomedico->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $atestadomedicos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection