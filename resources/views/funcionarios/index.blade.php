@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Funcionarios
            <a class="btn btn-success pull-right" href="{{ route('funcionarios.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($funcionarios->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th style="width: 50px">ID</th>
                            <th style="width: 100px">PROFLEIMAGE</th>
                        <th>NOME</th>
                        <th>POSTO</th>
                        <th>STATUS</th>
                        <th>ESCALA</th>
                        <th>HORÁRIO</th>
                      <!--  <th>CPF</th>
                        <th>RG</th>
                        <th>CTPS</th>
                        <th>ENDERECO</th>
                        <th>NASCIMENTO</th>
                        <th>PIS_PASEP</th>
                        <th>RESERVISTA</th>
                        <th>TITULO_ELEITOR</th>
                        <th>TELEFONE</th>
                        <th>EMAIL</th>
                        <th>DATA_ADMISSAO</th>
                        <th>FUNCAO</th>
                        <th>FARDA</th>
                        <th>BOTA</th>
                        <th>FILIACAO</th>
                        <th>FILHOS</th>
                        <th>BANCO</th>
                        <th>BANCO_CONTA</th>
                        <th>BANCO_AGENCIA</th>
                        <th>BANCO_TIPO</th>
                        <th>CONTATO_EMERGENCIA</th>
                        <th>TIPO_SANGUINEO</th>
                        <th>ESTADO_CIVIL</th>
                        <th>NOME_CONJUGE</th>
                        <th>GRAU_INSTRUCAO</th>
                        <th>DEFICIENCIA</th>
                        <th>RECEBE_VALE_TRANSPORTE</th>
                        <th>CARGO</th>
                        <th>CBO</th>
                        <th>ASO</th>
                        <th>REFERENCIA</th>
                        <th>PREENCHIDA_POR</th>
                        <th>OBS</th> -->
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($funcionarios as $funcionario)
                            <tr>
                                <td>{{$funcionario->id}}</td>
                                <td align="center"><img height="70" width="70" src="{{asset("$funcionario->profleimage")}}"></td>
                               <!--  <td>{{$funcionario->profleimage}}</td> -->
                    <td>{{$funcionario->nome}}</td>                                
                    <td>{{$funcionario->posto}}</td> 
                    <td>{{$funcionario->status}}</td>
                    <td>{{$funcionario->tipo}}</td>
                    <td>{{$funcionario->horario}}</td>
                  <!--  
                    <td>{{$funcionario->cpf}}</td>
                    <td>{{$funcionario->rg}}</td>
                    <td>{{$funcionario->ctps}}</td>
                    <td>{{$funcionario->endereco}}</td>
                    <td>{{$funcionario->nascimento}}</td>
                    <td>{{$funcionario->pis_pasep}}</td>
                    <td>{{$funcionario->reservista}}</td>
                    <td>{{$funcionario->titulo_eleitor}}</td>
                    <td>{{$funcionario->telefone}}</td>
                    <td>{{$funcionario->email}}</td>
                    <td>{{$funcionario->data_admissao}}</td>
                    <td>{{$funcionario->funcao}}</td>
                    <td>{{$funcionario->farda}}</td>
                    <td>{{$funcionario->bota}}</td>
                    <td>{{$funcionario->filiacao}}</td>
                    <td>{{$funcionario->filhos}}</td>
                    <td>{{$funcionario->banco}}</td>
                    <td>{{$funcionario->banco_conta}}</td>
                    <td>{{$funcionario->banco_agencia}}</td>
                    <td>{{$funcionario->banco_tipo}}</td>
                    <td>{{$funcionario->contato_emergencia}}</td>
                    <td>{{$funcionario->tipo_sanguineo}}</td>
                    <td>{{$funcionario->estado_civil}}</td>
                    <td>{{$funcionario->nome_conjuge}}</td>
                    <td>{{$funcionario->grau_instrucao}}</td>
                    <td>{{$funcionario->deficiencia}}</td>
                    <td>{{$funcionario->recebe_vale_transporte}}</td>
                    <td>{{$funcionario->cargo}}</td>
                    <td>{{$funcionario->cbo}}</td>
                    <td>{{$funcionario->aso}}</td>
                    <td>{{$funcionario->referencia}}</td>
                    <td>{{$funcionario->preenchida_por}}</td>
                    <td>{{$funcionario->obs}}</td> -->
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('funcionarios.show', $funcionario->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('funcionarios.edit', $funcionario->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar? Tem certesa?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $funcionarios->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection