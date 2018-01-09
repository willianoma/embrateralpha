@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Ocorrencias
            <a class="btn btn-success pull-right" href="{{ route('ocorrencias.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($ocorrencias->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USUARIO</th>
                        <th>POSTO</th>
                        <th>OCORRENCIA</th>
                        <th>OCORRENCIA_DESCRICAO</th>
                        <th>OCORRENCIA_DATA</th>
                        <th>FUNCIONARIOS_ENVOLVIDO</th>
                        <th>FISCAL_RESPONSAVEL</th>
                        <th>ANEXOS</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($ocorrencias as $ocorrencia)
                            <tr>
                                <td>{{$ocorrencia->id}}</td>
                                <td>{{$ocorrencia->usuario}}</td>
                    <td>{{$ocorrencia->posto}}</td>
                    <td>{{$ocorrencia->ocorrencia}}</td>
                    <td>{{$ocorrencia->ocorrencia_descricao}}</td>
                    <td>{{$ocorrencia->ocorrencia_data}}</td>
                    <td>{{$ocorrencia->funcionarios_envolvido}}</td>
                    <td>{{$ocorrencia->fiscal_responsavel}}</td>
                    <td>{{$ocorrencia->anexos}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('ocorrencias.show', $ocorrencia->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('ocorrencias.edit', $ocorrencia->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('ocorrencias.destroy', $ocorrencia->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $ocorrencias->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection