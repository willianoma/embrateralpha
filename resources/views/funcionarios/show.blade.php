@extends('layout')
@section('header')
<div class="page-header">
        <h1>Funcionarios / Show #{{$funcionario->id}}</h1>
        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('funcionarios.edit', $funcionario->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                       <p class="form-control-static">{{$funcionario->id}}</p>
                </div>
                <div class="form-group">
                     <label for="profleimage">PROFLEIMAGE</label>
                      <img height="80" width="80" src="{{asset("$funcionario->profleimage")}}">
                     <!--<p class="form-control-static">{{$funcionario->profleimage}}</p>-->
                </div>
                    <div class="form-group">
                     <label for="nome">NOME</label>
                     <p class="form-control-static">{{$funcionario->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="posto">POSTO</label>
                     <p class="form-control-static">{{$funcionario->posto}}</p>
                </div>
                    <div class="form-group">
                     <label for="cpf">CPF</label>
                     <p class="form-control-static">{{$funcionario->cpf}}</p>
                </div>
                    <div class="form-group">
                     <label for="rg">RG</label>
                     <p class="form-control-static">{{$funcionario->rg}}</p>
                </div>
                    <div class="form-group">
                     <label for="ctps">CTPS</label>
                     <p class="form-control-static">{{$funcionario->ctps}}</p>
                </div>
                    <div class="form-group">
                     <label for="endereco">ENDERECO</label>
                     <p class="form-control-static">{{$funcionario->endereco}}</p>
                </div>
                    <div class="form-group">
                     <label for="nascimento">NASCIMENTO</label>
                     <p class="form-control-static">{{$funcionario->nascimento}}</p>
                </div>
                    <div class="form-group">
                     <label for="pis_pasep">PIS_PASEP</label>
                     <p class="form-control-static">{{$funcionario->pis_pasep}}</p>
                </div>
                    <div class="form-group">
                     <label for="reservista">RESERVISTA</label>
                     <p class="form-control-static">{{$funcionario->reservista}}</p>
                </div>
                    <div class="form-group">
                     <label for="titulo_eleitor">TITULO_ELEITOR</label>
                     <p class="form-control-static">{{$funcionario->titulo_eleitor}}</p>
                </div>
                    <div class="form-group">
                     <label for="telefone">TELEFONE</label>
                     <p class="form-control-static">{{$funcionario->telefone}}</p>
                </div>
                    <div class="form-group">
                     <label for="email">EMAIL</label>
                     <p class="form-control-static">{{$funcionario->email}}</p>
                </div>
                    <div class="form-group">
                     <label for="data_admissao">DATA_ADMISSAO</label>
                     <p class="form-control-static">{{$funcionario->data_admissao}}</p>
                </div>
                    <div class="form-group">
                     <label for="funcao">FUNCAO</label>
                     <p class="form-control-static">{{$funcionario->funcao}}</p>
                </div>
                    <div class="form-group">
                     <label for="farda">FARDA</label>
                     <p class="form-control-static">{{$funcionario->farda}}</p>
                </div>
                    <div class="form-group">
                     <label for="bota">BOTA</label>
                     <p class="form-control-static">{{$funcionario->bota}}</p>
                </div>
                    <div class="form-group">
                     <label for="filiacao">FILIACAO</label>
                     <p class="form-control-static">{{$funcionario->filiacao}}</p>
                </div>
                    <div class="form-group">
                     <label for="filhos">FILHOS</label>
                     <p class="form-control-static">{{$funcionario->filhos}}</p>
                </div>
                    <div class="form-group">
                     <label for="banco">BANCO</label>
                     <p class="form-control-static">{{$funcionario->banco}}</p>
                </div>
                    <div class="form-group">
                     <label for="banco_conta">BANCO_CONTA</label>
                     <p class="form-control-static">{{$funcionario->banco_conta}}</p>
                </div>
                    <div class="form-group">
                     <label for="banco_agencia">BANCO_AGENCIA</label>
                     <p class="form-control-static">{{$funcionario->banco_agencia}}</p>
                </div>
                    <div class="form-group">
                     <label for="banco_tipo">BANCO_TIPO</label>
                     <p class="form-control-static">{{$funcionario->banco_tipo}}</p>
                </div>
                    <div class="form-group">
                     <label for="contato_emergencia">CONTATO_EMERGENCIA</label>
                     <p class="form-control-static">{{$funcionario->contato_emergencia}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipo_sanguineo">TIPO_SANGUINEO</label>
                     <p class="form-control-static">{{$funcionario->tipo_sanguineo}}</p>
                </div>
                    <div class="form-group">
                     <label for="estado_civil">ESTADO_CIVIL</label>
                     <p class="form-control-static">{{$funcionario->estado_civil}}</p>
                </div>
                    <div class="form-group">
                     <label for="nome_conjuge">NOME_CONJUGE</label>
                     <p class="form-control-static">{{$funcionario->nome_conjuge}}</p>
                </div>
                    <div class="form-group">
                     <label for="grau_instrucao">GRAU_INSTRUCAO</label>
                     <p class="form-control-static">{{$funcionario->grau_instrucao}}</p>
                </div>
                    <div class="form-group">
                     <label for="deficiencia">DEFICIENCIA</label>
                     <p class="form-control-static">{{$funcionario->deficiencia}}</p>
                </div>
                    <div class="form-group">
                     <label for="recebe_vale_transporte">RECEBE_VALE_TRANSPORTE</label>
                     <p class="form-control-static">{{$funcionario->recebe_vale_transporte}}</p>
                </div>
                    <div class="form-group">
                     <label for="cargo">CARGO</label>
                     <p class="form-control-static">{{$funcionario->cargo}}</p>
                </div>
                    <div class="form-group">
                     <label for="cbo">CBO</label>
                     <p class="form-control-static">{{$funcionario->cbo}}</p>
                </div>
                    <div class="form-group">
                     <label for="aso">ASO</label>
                     <p class="form-control-static">{{$funcionario->aso}}</p>
                </div>
                    <div class="form-group">
                     <label for="referencia">REFERENCIA</label>
                     <p class="form-control-static">{{$funcionario->referencia}}</p>
                </div>
                    <div class="form-group">
                     <label for="preenchida_por">PREENCHIDA_POR</label>
                     <p class="form-control-static">{{$funcionario->preenchida_por}}</p>
                </div>
                    <div class="form-group">
                     <label for="obs">OBS</label>
                     <p class="form-control-static">{{$funcionario->obs}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('funcionarios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection