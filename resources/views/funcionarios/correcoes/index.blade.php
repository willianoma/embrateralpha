@extends('layout')

@section('content')

   {{-- <form action="correcoes" method="get" enctype="multipart/form-data">
        <div class="col-md-3">
            <select name="postoselecionado" class="form-control">
                <option selected value="vazio">Selecionar Posto</option>
                @foreach($postos as $posto)
                    <option>{{$posto->nome}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit">
        </div>

    </form>--}}
@endsection


{{--
<form action="correcoes" method="get" enctype="multipart/form-data">
   --}}
{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}{{--


    <input type="checkbox" name="id">
    <label>id</label>

    <input type="checkbox" name="profleimage">
    <label>Foto</label>

    <input type="checkbox" name="nome">
    <label>Nome</label>

    <input type="checkbox" name="posto">
    <label>Posto</label>

    <input type="checkbox" name="cpf">
    <label>CPF</label>

    <input type="checkbox" name="rg">
    <label>RG</label>

    <input type="checkbox" name="ctps">
    <label>CTPS</label>

    <input type="checkbox" name="endereco">
    <label>Endereço</label>

    <input type="checkbox" name="nascimento">
    <label>Nascimento</label>

    <input type="checkbox" name="pis_pasep">
    <label>Pis/Pasep</label>

    <input type="checkbox" name="reservista">
    <label>Reservista</label>

    <input type="checkbox" name="titulo_eleitor">
    <label>Titulo de Eleitor</label>

    <input type="checkbox" name="telefone">
    <label>Telefone</label>

    <input type="checkbox" name="email">
    <label>E-mail</label>

    <input type="checkbox" name="data_admissao">
    <label>Data de Admissão</label>

    <input type="checkbox" name="funcao">
    <label>Função</label>

    <input type="checkbox" name="farda">
    <label>Farda</label>

    <input type="checkbox" name="bota">
    <label>Bota</label>

    <input type="checkbox" name="filiacao">
    <label>Filiação</label>

    <input type="checkbox" name="filhos">
    <label>Filhos</label>

    <input type="checkbox" name="banco">
    <label>Banco</label>

    <input type="checkbox" name="banco_conta">
    <label>Banco Conta</label>

    <input type="checkbox" name="banco_agencia">
    <label>Banco Agencia</label>

    <input type="checkbox" name="banco_tipo">
    <label>Banco Tipo</label>

    <input type="checkbox" name="contato_emergencia">
    <label>Contato de Emergencia </label>

    <input type="checkbox" name="tipo_sanguineo">
    <label>Tipo Sanguineo</label>

    <input type="checkbox" name="estado_civil">
    <label>Estado Civil</label>

    <input type="checkbox" name="nome_conjuge">
    <label>Nome Conjuge</label>

    <input type="checkbox" name="grau_instrucao">
    <label>Grau de Instrução</label>

    <input type="checkbox" name="deficiencia">
    <label>Deficiencia</label>

    <input type="checkbox" name="recebe_vale_transporte">
    <label>Recebe Vale Transporte</label>

    <input type="checkbox" name="cargo">
    <label>Cargo</label>

    <input type="checkbox" name="cbo">
    <label>CBO</label>

    <input type="checkbox" name="aso">
    <label>ASO</label>

    <input type="checkbox" name="referencia">
    <label>Referencia</label>

    <input type="checkbox" name="obs">
    <label>Obs</label>

    <input type="checkbox" name="horario">
    <label>Horario</label>

    <input type="checkbox" name="tipo">
    <label>Tipo de horario</label>

    <input type="checkbox" name="status">
    <label>Status</label>

    <input type="submit">

</form>
--}}