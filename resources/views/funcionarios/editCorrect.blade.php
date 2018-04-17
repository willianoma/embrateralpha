@extends('layout')

@section('header')
<div class="page-header">
  <h3><i class="glyphicon glyphicon-edit"></i> Funcionarios / Edit #{{$funcionario->id}}</h3>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
  <div class="col-md-12">

    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group @if($errors->has('profleimage')) has-error @endif">
       <label for="profleimage-field">Profleimage</label>
       <img height="70" width="70" src="{{asset("$funcionario->profleimage")}}">
       <input type="file" id="profleimage-field" name="profleimage" class="form-control" value="{{ $funcionario->profleimage }}"/>
       @if($errors->has("profleimage"))
       <span class="help-block">{{ $errors->first("profleimage") }}</span>
       @endif
     </div>


     <div class="form-group @if($errors->has('nome')) has-error @endif">
       <label for="nome-field">Nome</label>
       <input type="text" id="nome-field" name="nome" class="form-control" value="{{ $funcionario->nome }}"/>
       @if($errors->has("nome"))
       <span class="help-block">{{ $errors->first("nome") }}</span>
       @endif
     </div>


     <div class="form-group @if($errors->has('posto')) has-error @endif">
       <label for="posto-field">Posto</label>     

       <select id="posto-field" name="posto" class="form-control">
         <?php

         foreach ($postos as $key => $value) {
          if ($value->nome == $funcionario->posto) {
            echo "<option selected=''>";
            echo $value->nome;
            echo ' </option>';
          }else{
            echo '<option>';
            echo $value->nome;
            echo ' </option>';
          }}
          ?>
        </select>

        <!--   <input type="text" id="posto-field" name="posto" class="form-control" value="{{ $funcionario->posto }}"/> -->
        @if($errors->has("posto"))
        <span class="help-block">{{ $errors->first("posto") }}</span>
        @endif
      </div>


      <div class="form-group @if($errors->has('cpf')) has-error @endif">
       <label for="cpf-field">Cpf</label>
       <input type="text" id="cpf-field" name="cpf" class="form-control" value="{{ $funcionario->cpf }}"/>
       @if($errors->has("cpf"))
       <span class="help-block">{{ $errors->first("cpf") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('rg')) has-error @endif">
       <label for="rg-field">Rg</label>
       <input type="text" id="rg-field" name="rg" class="form-control" value="{{ $funcionario->rg }}"/>
       @if($errors->has("rg"))
       <span class="help-block">{{ $errors->first("rg") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('ctps')) has-error @endif">
       <label for="ctps-field">Ctps</label>
       <input type="text" id="ctps-field" name="ctps" class="form-control" value="{{ $funcionario->ctps }}"/>
       @if($errors->has("ctps"))
       <span class="help-block">{{ $errors->first("ctps") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('endereco')) has-error @endif">
       <label for="endereco-field">Endereco</label>
       <input type="text" id="endereco-field" name="endereco" class="form-control" value="{{ $funcionario->endereco }}"/>
       @if($errors->has("endereco"))
       <span class="help-block">{{ $errors->first("endereco") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('nascimento')) has-error @endif">
       <label for="nascimento-field">Nascimento</label>
       <input type="text" id="nascimento-field" name="nascimento" class="form-control" value="{{ $funcionario->nascimento }}"/>
       @if($errors->has("nascimento"))
       <span class="help-block">{{ $errors->first("nascimento") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('pis_pasep')) has-error @endif">
       <label for="pis_pasep-field">Pis_pasep</label>
       <input type="text" id="pis_pasep-field" required="" name="pis_pasep" class="form-control" value="{{ $funcionario->pis_pasep }}"/>
       @if($errors->has("pis_pasep"))
       <span class="help-block">{{ $errors->first("pis_pasep") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('reservista')) has-error @endif">
       <label for="reservista-field">Reservista</label>
       <input type="text" id="reservista-field" name="reservista" class="form-control" value="{{ $funcionario->reservista }}"/>
       @if($errors->has("reservista"))
       <span class="help-block">{{ $errors->first("reservista") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('titulo_eleitor')) has-error @endif">
       <label for="titulo_eleitor-field">Titulo_eleitor</label>
       <input type="text" id="titulo_eleitor-field" name="titulo_eleitor" class="form-control" value="{{ $funcionario->titulo_eleitor }}"/>
       @if($errors->has("titulo_eleitor"))
       <span class="help-block">{{ $errors->first("titulo_eleitor") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('telefone')) has-error @endif">
       <label for="telefone-field">Telefone</label>
       <input type="text" id="telefone-field" name="telefone" class="form-control" value="{{ $funcionario->telefone }}"/>
       @if($errors->has("telefone"))
       <span class="help-block">{{ $errors->first("telefone") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('email')) has-error @endif">
       <label for="email-field">Email</label>
       <input type="text" id="email-field" name="email" class="form-control" value="{{ $funcionario->email }}"/>
       @if($errors->has("email"))
       <span class="help-block">{{ $errors->first("email") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('data_admissao')) has-error @endif">
       <label for="data_admissao-field">Data_admissao</label>
       <input type="text" id="data_admissao-field" name="data_admissao" class="form-control" value="{{ $funcionario->data_admissao }}"/>
       @if($errors->has("data_admissao"))
       <span class="help-block">{{ $errors->first("data_admissao") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('funcao')) has-error @endif">
       <label for="funcao-field">Funcao</label>
       <input type="text" id="funcao-field" name="funcao" class="form-control" value="{{ $funcionario->funcao }}"/>
       @if($errors->has("funcao"))
       <span class="help-block">{{ $errors->first("funcao") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('farda')) has-error @endif">
       <label for="farda-field">Farda</label>
       <input type="text" id="farda-field" name="farda" class="form-control" value="{{ $funcionario->farda }}"/>
       @if($errors->has("farda"))
       <span class="help-block">{{ $errors->first("farda") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('bota')) has-error @endif">
       <label for="bota-field">Bota</label>
       <input type="text" id="bota-field" name="bota" class="form-control" value="{{ $funcionario->bota }}"/>
       @if($errors->has("bota"))
       <span class="help-block">{{ $errors->first("bota") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('filiacao')) has-error @endif">
       <label for="filiacao-field">Filiacao</label>
       <input type="text" id="filiacao-field" name="filiacao" class="form-control" value="{{ $funcionario->filiacao }}"/>
       @if($errors->has("filiacao"))
       <span class="help-block">{{ $errors->first("filiacao") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('filhos')) has-error @endif">
       <label for="filhos-field">Filhos</label>
       <input type="text" id="filhos-field" name="filhos" class="form-control" value="{{ $funcionario->filhos }}"/>
       @if($errors->has("filhos"))
       <span class="help-block">{{ $errors->first("filhos") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('banco')) has-error @endif">
       <label for="banco-field">Banco</label>
       <input type="text" id="banco-field" name="banco" class="form-control" value="{{ $funcionario->banco }}"/>
       @if($errors->has("banco"))
       <span class="help-block">{{ $errors->first("banco") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('banco_conta')) has-error @endif">
       <label for="banco_conta-field">Banco_conta</label>
       <input type="text" id="banco_conta-field" name="banco_conta" class="form-control" value="{{ $funcionario->banco_conta }}"/>
       @if($errors->has("banco_conta"))
       <span class="help-block">{{ $errors->first("banco_conta") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('banco_agencia')) has-error @endif">
       <label for="banco_agencia-field">Banco_agencia</label>
       <input type="text" id="banco_agencia-field" name="banco_agencia" class="form-control" value="{{ $funcionario->banco_agencia }}"/>
       @if($errors->has("banco_agencia"))
       <span class="help-block">{{ $errors->first("banco_agencia") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('banco_tipo')) has-error @endif">
       <label for="banco_tipo-field">Banco_tipo</label>
       <input type="text" id="banco_tipo-field" name="banco_tipo" class="form-control" value="{{ $funcionario->banco_tipo }}"/>
       @if($errors->has("banco_tipo"))
       <span class="help-block">{{ $errors->first("banco_tipo") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('contato_emergencia')) has-error @endif">
       <label for="contato_emergencia-field">Contato_emergencia</label>
       <input type="text" id="contato_emergencia-field" name="contato_emergencia" class="form-control" value="{{ $funcionario->contato_emergencia }}"/>
       @if($errors->has("contato_emergencia"))
       <span class="help-block">{{ $errors->first("contato_emergencia") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('tipo_sanguineo')) has-error @endif">
       <label for="tipo_sanguineo-field">Tipo_sanguineo</label>
       <input type="text" id="tipo_sanguineo-field" name="tipo_sanguineo" class="form-control" value="{{ $funcionario->tipo_sanguineo }}"/>
       @if($errors->has("tipo_sanguineo"))
       <span class="help-block">{{ $errors->first("tipo_sanguineo") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('estado_civil')) has-error @endif">
       <label for="estado_civil-field">Estado_civil</label>
       <input type="text" id="estado_civil-field" name="estado_civil" class="form-control" value="{{ $funcionario->estado_civil }}"/>
       @if($errors->has("estado_civil"))
       <span class="help-block">{{ $errors->first("estado_civil") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('nome_conjuge')) has-error @endif">
       <label for="nome_conjuge-field">Nome_conjuge</label>
       <input type="text" id="nome_conjuge-field" name="nome_conjuge" class="form-control" value="{{ $funcionario->nome_conjuge }}"/>
       @if($errors->has("nome_conjuge"))
       <span class="help-block">{{ $errors->first("nome_conjuge") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('grau_instrucao')) has-error @endif">
       <label for="grau_instrucao-field">Grau_instrucao</label>
       <input type="text" id="grau_instrucao-field" name="grau_instrucao" class="form-control" value="{{ $funcionario->grau_instrucao }}"/>
       @if($errors->has("grau_instrucao"))
       <span class="help-block">{{ $errors->first("grau_instrucao") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('deficiencia')) has-error @endif">
       <label for="deficiencia-field">Deficiencia</label>
       <input type="text" id="deficiencia-field" name="deficiencia" class="form-control" value="{{ $funcionario->deficiencia }}"/>
       @if($errors->has("deficiencia"))
       <span class="help-block">{{ $errors->first("deficiencia") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('recebe_vale_transporte')) has-error @endif">
       <label for="recebe_vale_transporte-field">Recebe_vale_transporte</label>
       <input type="text" id="recebe_vale_transporte-field" name="recebe_vale_transporte" class="form-control" value="{{ $funcionario->recebe_vale_transporte }}"/>
       @if($errors->has("recebe_vale_transporte"))
       <span class="help-block">{{ $errors->first("recebe_vale_transporte") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('cargo')) has-error @endif">
       <label for="cargo-field">Cargo</label>
       <input type="text" id="cargo-field" name="cargo" class="form-control" value="{{ $funcionario->cargo }}"/>
       @if($errors->has("cargo"))
       <span class="help-block">{{ $errors->first("cargo") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('cbo')) has-error @endif">
       <label for="cbo-field">Cbo</label>
       <input type="text" id="cbo-field" name="cbo" class="form-control" value="{{ $funcionario->cbo }}"/>
       @if($errors->has("cbo"))
       <span class="help-block">{{ $errors->first("cbo") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('aso')) has-error @endif">
       <label for="aso-field">Aso</label>
       <input type="text" id="aso-field" name="aso" class="form-control" value="{{ $funcionario->aso }}"/>
       @if($errors->has("aso"))
       <span class="help-block">{{ $errors->first("aso") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('referencia')) has-error @endif">
       <label for="referencia-field">Referencia</label>
       <input type="text" id="referencia-field" name="referencia" class="form-control" value="{{ $funcionario->referencia }}"/>
       @if($errors->has("referencia"))
       <span class="help-block">{{ $errors->first("referencia") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('preenchida_por')) has-error @endif">
       <label for="preenchida_por-field">Preenchida_por</label>
       <input type="text" id="preenchida_por-field" name="preenchida_por" class="form-control" value="{{ $funcionario->preenchida_por }}"/>
       @if($errors->has("preenchida_por"))
       <span class="help-block">{{ $errors->first("preenchida_por") }}</span>
       @endif
     </div>
     <div class="form-group @if($errors->has('obs')) has-error @endif">
       <label for="obs-field">Obs</label>
       <input type="text" id="obs-field" name="obs" class="form-control" value="{{ $funcionario->obs }}"/>
       @if($errors->has("obs"))
       <span class="help-block">{{ $errors->first("obs") }}</span>
       @endif
     </div>

     <div class="form-group @if($errors->has('horario')) has-error @endif">
     <label for="horario-field">horario</label>
       <input type="text" id="horario-field" name="horario" class="form-control" value="{{ $funcionario->horario }}"/>
       @if($errors->has("horario"))
       <span class="help-block">{{ $errors->first("horario") }}</span>
       @endif
     </div>

     <div class="form-group @if($errors->has('tipo')) has-error @endif">
       <label for="tipo-field">tipo</label>
       <input type="text" id="tipo-field" name="tipo" class="form-control" value="{{ $funcionario->tipo }}"/>
       @if($errors->has("tipo"))
       <span class="help-block">{{ $errors->first("tipo") }}</span>
       @endif
     </div>

     <div class="form-group @if($errors->has('status')) has-error @endif">
       <label for="status-field">status</label>
       <input type="text" id="status-field" name="status" class="form-control" value="{{ $funcionario->status }}"/>
       @if($errors->has("status"))
       <span class="help-block">{{ $errors->first("status") }}</span>
       @endif
     </div>

     <div class="well well-sm">
      <button type="submit" class="btn btn-primary">Save</button>
      <a class="btn btn-link pull-right" href="{{ route('funcionarios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
    </div>
  </form>

</div>
</div>
@endsection