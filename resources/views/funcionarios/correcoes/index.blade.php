<form action="correcoes" method="get" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="checkbox" name="id">
    <label>id</label>
    <input type="checkbox" name="profleimage">
    <label>Foto</label>
    <input type="checkbox" name="nome">
    <label>Nome</label>
    <input type="checkbox" name="posto">
    <label>CPF</label>
    <input type="checkbox" name="cpf">
    <label>RG</label>
    <input type="checkbox" name="rg">
    <label>CTPS</label>
    <input type="checkbox" name="ctps">
    <label>Endereço</label>
    <input type="checkbox" name="endereco">
    <label>Nascimento</label>
    <input type="checkbox" name="nascimento">
    <label>Pis/Pasep</label>
    <input type="checkbox" name="pis_pasep">
    <label>Reservista</label>
    <input type="checkbox" name="reservista">
    <label>Titulo de Eleitor</label>
    <input type="checkbox" name="titulo_eleitor">
    <label>Telefone</label>
    <input type="checkbox" name="telefone">
    <label>E-mail</label>
    <input type="checkbox" name="email">
    <label>Data de Admissão</label>
    <input type="checkbox" name="data_admissao">
    <label>Função</label>
    <input type="checkbox" name="funcao">
    <label>Farda</label>
    <input type="checkbox" name="farda">
    <label>Bota</label>
    <input type="checkbox" name="bota">
    <label>Filiação</label>
    <input type="checkbox" name="filiacao">
    <label>Filhos</label>
    <input type="checkbox" name="filhos">
    <label>Banco</label>
    <input type="checkbox" name="banco">
    <label>Banco Conta</label>
    <input type="checkbox" name="banco_conta">
    <label>Banco Agencia</label>
    <input type="checkbox" name="banco_agencia">
    <label>Banco Tipo</label>
    <input type="checkbox" name="banco_tipo">
    <label>Contato de Emergencia </label>
    <input type="checkbox" name="contato_emergencia">
    <label>Tipo Sanguineo</label>
    <input type="checkbox" name="tipo_sanguineo">
    <label>Estado Civil</label>
    <input type="checkbox" name="estado_civil">
    <label>Nome Conjuge</label>
    <input type="checkbox" name="nome_conjuge">
    <label>Grau de Instrução</label>
    <input type="checkbox" name="grau_instrucao">
    <label>Deficiencia</label>
    <input type="checkbox" name="deficiencia">
    <label>Recebe Vale Transporte</label>
    <input type="checkbox" name="recebe_vale_transporte">
    <label>Cargo</label>
    <input type="checkbox" name="cargo">
    <label>CBO</label>
    <input type="checkbox" name="cbo">
    <label>ASO</label>
    <input type="checkbox" name="aso">
    <label>Referencia</label>
    <input type="checkbox" name="referencia">
    <label>Obs</label>
    <input type="checkbox" name="obs">
    <label>Horario</label>
    <input type="checkbox" name="horario">
    <label>Tipo de horario</label>
    <input type="checkbox" name="tipo">
    <label>Status</label>
    <input type="checkbox" name="status">
    <input type="submit">
</form>