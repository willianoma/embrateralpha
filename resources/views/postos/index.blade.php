@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Postos
            <a class="btn btn-success pull-right" href="{{ route('postos.create') }}"><i
                        class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($postos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>Qtd Funcionários</th>
                        <th>ENDERECO</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($postos as $posto)
                        <tr>
                            <td>{{$posto->id}}</td>
                            <td>{{$posto->nome}}</td>
                            <td>{{$posto->qtdfunc}}</td>
                            <td>{{$posto->endereco}}</td>
                            <td class="text-right">
                                <a class="btn btn-xs btn-primary" href="{{ route('postos.show', $posto->id) }}"><i
                                            class="glyphicon glyphicon-eye-open"></i> View</a>
                                <a class="btn btn-xs btn-warning" href="{{ route('postos.edit', $posto->id) }}"><i
                                            class="glyphicon glyphicon-edit"></i> Edit</a>
                                <form action="{{ route('postos.destroy', $posto->id) }}" method="POST"
                                      style="display: inline;"
                                      onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-xs btn-danger"><i
                                                class="glyphicon glyphicon-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $postos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection