<head>
    <link href="{{ asset('/css/formfuncionario.css') }}" rel="stylesheet">
</head>
@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> {{trans('crud/funcionarios.title')}}
            / {{trans('crud/crud.create')}} </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <script>
        function formatar(mascara, documento) {
            var i = documento.value.length;
            var saida = mascara.substring(0, 1);
            var texto = mascara.substring(i)

            if (texto.substring(0, 1) != saida) {
                documento.value += texto.substring(0, 1);
            }

        }
    </script>

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('funcionarios.store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-horizontal div-top col-md-12 last-item first-item @if($errors->has('profleimage')) has-error @endif">
                    <label for="profleimage-field">{{trans('crud/funcionarios.profile_image')}}</label>
                    <input type="file" id="profleimage-field" name="profleimage" class="form-control"
                           value="{{ old("profleimage") }}"/>
                    @if($errors->has("profleimage"))
                        <span class="help-block">{{ $errors->first("profleimage") }}</span>
                    @endif
                </div>


                <div class="form-group first-item last-item @if($errors->has('nome')) has-error @endif">
                    <label for="nome-field">{{trans('crud/funcionarios.name')}}</label>
                    <input type="text" required="" id="nome-field" name="nome" class="form-control"
                           value="{{ old("nome") }}"/>
                    @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                @endif

                <!-- 4 Itens -->

                </div>
                <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('posto')) has-error @endif">
                    <label for="posto-field">{{trans('crud/funcionarios.station')}}</label>

                    <select id="posto-field" name="posto" class="form-control">
                        <?php


                        foreach ($postos as $key => $value) {
                            echo '<option>';
                            echo $value->nome;
                            echo ' </option>';

                        }
                        ?>
                    </select>

                <!--  <input type="text" id="posto-field" name="posto" class="form-control" value="{{ old("posto") }}"/> -->


                    @if($errors->has("posto"))
                        <span class="help-block">{{ $errors->first("posto") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('tipo')) has-error @endif">
                    <label for="tipo-field">{{trans('crud/funcionarios.workload')}}</label>

                @include('funcionarios.partials.tipoHorario')

                <!--  <input type="text" id="tipo-field" name="tipo" class="form-control" value="{{ old("tipo") }}"/>-->
                    @if($errors->has("tipo"))


                        <span class="help-block">{{ $errors->first("tipo") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('horario')) has-error @endif">
                    <label for="horario-field">{{trans('crud/funcionarios.schedule')}}</label>

                @include('funcionarios.partials.horarios')

                <!--<input type="text" id="horario-field" name="horario" class="form-control" value="{{ old("horario") }}"/>-->
                    @if($errors->has("horario"))

                        <span class="help-block">{{ $errors->first("horario") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding last-item  @if($errors->has('status')) has-error @endif">
                    <label for="status-field">{{trans('crud/funcionarios.status')}}</label>

                @include('funcionarios.partials.statusFuncionario')

                <!--<input type="text" id="status-field" name="status" class="form-control" value="{{ old("status") }}"/>-->
                    @if($errors->has("status"))
                        <span class="help-block">{{ $errors->first("status") }}</span>
                    @endif
                </div>

                <!-- Fim 4 Itens -->

                <!-- 4 Itens -->

                <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('cargo')) has-error @endif">
                    <label for="cargo-field">{{trans('crud/funcionarios.office')}}</label>

                @include('funcionarios.partials.cargoFuncionario')

                <!--<input type="text" id="cargo-field" name="cargo" class="form-control" value="{{ old("cargo") }}"/>-->

                    @if($errors->has("cargo"))
                        <span class="help-block">{{ $errors->first("cargo") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('funcao')) has-error @endif">
                    <label for="funcao-field">{{trans('crud/funcionarios.function')}}</label>

                @include('funcionarios.partials.funcoesFuncionarios')


                <!-- <input type="text" id="funcao-field" name="funcao" class="form-control" value="{{ old("funcao") }}"/>-->

                    @if($errors->has("funcao"))
                        <span class="help-block">{{ $errors->first("funcao") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('data_admissao')) has-error @endif">
                    <label for="data_admissao-field">{{trans('crud/funcionarios.date_adm')}}</label>
                    <input type="date" data-date-format="DD MM YYYY" id="data_admissao-field" name="data_admissao"
                           class="form-control"
                           value="{{ old("data_admissao") }}"/>
                    @if($errors->has("data_admissao"))
                        <span class="help-block">{{ $errors->first("data_admissao") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('estado_civil')) has-error @endif">
                    <label for="estado_civil-field">{{trans('crud/funcionarios.civil_state')}}</label>

                @include('funcionarios.partials.estadoSocial')

                <!--<input type="text" id="estado_civil-field" name="estado_civil" class="form-control" value="{{ old("estado_civil") }}
                        "/>-->
                    @if($errors->has("estado_civil"))
                        <span class="help-block">{{ $errors->first("estado_civil") }}</span>
                    @endif
                </div>

                <!-- Fim 4 itens -->

                <!-- 4 itens -->

                <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('cpf')) has-error @endif">
                    <label for="cpf-field">{{trans('crud/funcionarios.cpf')}}</label>

                    <input name="cpf"
                           type="text"
                           placeholder="xxx.xxx.xxx-xx"
                           required=""
                           id="cpf-field"
                           maxlength="14"
                           class="form-control"
                           pattern="^\d{3}.\d{3}.\d{3}-\d{2}$"
                           OnKeyPress="formatar('###.###.###-##', this)"
                           title="Digite o CPF no formato xxx.xxx.xxx-xx"
                    />

                    @if($errors->has("cpf"))
                        <span class="help-block">{{ $errors->first("cpf") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('rg')) has-error @endif">
                    <label for="rg-field">{{trans('crud/funcionarios.rg')}}</label>
                    <input type="text" required="" id="rg-field" name="rg" class="form-control" pattern="[0-9]+$"
                           title="Apenas Números" placeholder="Apenas Números"
                           value="{{ old("rg") }}"/>
                    @if($errors->has("rg"))
                        <span class="help-block">{{ $errors->first("rg") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('ctps')) has-error @endif">
                    <label for="ctps-field">{{trans('crud/funcionarios.ctps')}}</label>
                    <input type="text" required="" id="ctps-field" name="ctps" class="form-control" pattern="[0-9]+$"
                           title="Apenas Números" placeholder="Apenas Números"
                           value="{{ old("ctps") }}"/>
                    @if($errors->has("ctps"))
                        <span class="help-block">{{ $errors->first("ctps") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('pis_pasep')) has-error @endif">
                    <label for="pis_pasep-field">{{trans('crud/funcionarios.pis')}}</label>

                    <input name="pis_pasep"
                           type="text"
                           placeholder="xxx.xxxxx.xx-x"
                           required=""
                           id="pis_pasep-field"
                           class="form-control"
                           maxlength="14"
                           pattern="^\d{3}.\d{5}.\d{2}-\d{1}$"
                           OnKeyPress="formatar('###.#####.##-#', this)"
                           title="Digite o numero do PIS/PASSEP no formato xxx.xxxxx.xx-x"

                           value="{{ old("pis_pasep") }}"/>
                    @if($errors->has("pis_pasep"))
                        <span class="help-block">{{ $errors->first("pis_pasep") }}</span>
                    @endif
                </div>

                <!-- Fim 4 itens -->

                <!-- 4 itens -->

                <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('reservista')) has-error @endif">
                    <label for="reservista-field">{{trans('crud/funcionarios.military_reservist')}}</label>
                    <input type="text" id="reservista-field" name="reservista" class="form-control"
                           value="{{ old("reservista") }}" title="Apenas Números" placeholder="Apenas Números"/>
                    @if($errors->has("reservista"))
                        <span class="help-block">{{ $errors->first("reservista") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('titulo_eleitor')) has-error @endif">
                    <label for="titulo_eleitor-field">{{trans('crud/funcionarios.voter_number')}}</label>
                    <input name="titulo_eleitor"
                           type="text"
                           maxlength="23"
                           id="titulo_eleitor-field"
                           class="form-control"
                           title="Digite o valor na ordem: Numero Incrição / Zona / Seção"
                           placeholder="Numero Incrição - Zona - Seção"
                           pattern="^\d{4}.\d{4}.\d{4}-\d{3}-\d{4}$"
                           OnKeyPress="formatar('####.####.####-###-####', this)"

                    />
                    @if($errors->has("titulo_eleitor"))
                        <span class="help-block">{{ $errors->first("titulo_eleitor") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('nascimento')) has-error @endif">
                    <label for="nascimento-field">{{trans('crud/funcionarios.born')}}</label>
                    <input type="date" id="nascimento-field" name="nascimento" class="form-control"
                           value="{{ old("nascimento") }}"/>
                    @if($errors->has("nascimento"))
                        <span class="help-block">{{ $errors->first("nascimento") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('grau_instrucao')) has-error @endif">
                    <label for="grau_instrucao-field">{{trans('crud/funcionarios.knowledge')}}</label>

                @include('funcionarios.partials.grauInstrucao')

                <!-- <input type="text" id="grau_instrucao-field" name="grau_instrucao" class="form-control" value="{{ old("grau_instrucao") }}"/> -->

                    @if($errors->has("grau_instrucao"))
                        <span class="help-block">{{ $errors->first("grau_instrucao") }}</span>
                    @endif
                </div>

                <!-- Fim 4 itens -->

                <!-- 4 itens -->

                <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('telefone')) has-error @endif">
                    <label for="telefone-field">{{trans('crud/funcionarios.phone')}}</label>
                    <input type="tel" required="" id="telefone-field" name="telefone" class="form-control"
                           pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"
                           placeholder="(xx) xxxxx-xxxx"
                           value="{{ old("telefone") }}"/>


                    @if($errors->has("telefone"))
                        <span class="help-block">{{ $errors->first("telefone") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('email')) has-error @endif">
                    <label for="email-field">{{trans('crud/funcionarios.email')}}</label>
                    <input type="text" id="email-field" name="email" class="form-control" value="{{ old("email") }}"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                           placeholder="xxxx@xxx.com"

                    />


                    @if($errors->has("email"))
                        <span class="help-block">{{ $errors->first("email") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('tipo_sanguineo')) has-error @endif">
                    <label for="tipo_sanguineo-field">{{trans('crud/funcionarios.blood_type')}}</label>
                    <input type="text" id="tipo_sanguineo-field" name="tipo_sanguineo" class="form-control"
                           value="{{ old("tipo_sanguineo") }}"/>
                    @if($errors->has("tipo_sanguineo"))
                        <span class="help-block">{{ $errors->first("tipo_sanguineo") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('deficiencia')) has-error @endif">
                    <label for="deficiencia-field">{{trans('crud/funcionarios.special_condition')}}</label>

                    <select id="deficiencia-field" name="deficiencia" class="form-control">
                        <option id="Nao" value="Nao">Não</option>
                        <option id="Sim" value="Sim">Sim</option>
                    </select>


                <!--<input type="text" id="deficiencia-field" name="deficiencia" class="form-control" value="{{ old("deficiencia") }}"/> -->

                    @if($errors->has("deficiencia"))
                        <span class="help-block">{{ $errors->first("deficiencia") }}</span>
                    @endif
                </div>


                <!-- Fim 4 itens -->

                <!-- 4 itens -->

                <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('farda')) has-error @endif">
                    <label for="farda-field">{{trans('crud/funcionarios.uniform')}}</label>

                @include('funcionarios.partials.fardas')

                <!--<input type="text" id="farda-field" name="farda" class="form-control" value="{{ old("farda") }}"/>-->

                    @if($errors->has("farda"))
                        <span class="help-block">{{ $errors->first("farda") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('bota')) has-error @endif">
                    <label for="bota-field">{{trans('crud/funcionarios.boot')}}</label>
                    <input type="number" id="bota-field" name="bota" class="form-control" value="{{ old("bota") }}" placeholder="36"/>
                    @if($errors->has("bota"))
                        <span class="help-block">{{ $errors->first("bota") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('contato_emergencia')) has-error @endif">
                    <label for="contato_emergencia-field">{{trans('crud/funcionarios.emergency_contact')}}</label>
                    <input type="text" id="contato_emergencia-field" name="contato_emergencia" class="form-control"  pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"
                           placeholder="(xx) xxxxx-xxxx"
                           value="{{ old("contato_emergencia") }}"/>
                    @if($errors->has("contato_emergencia"))
                        <span class="help-block">{{ $errors->first("contato_emergencia") }}</span>
                    @endif
                </div>


                <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('recebe_vale_transporte')) has-error @endif">
                    <label for="recebe_vale_transporte-field">{{trans('crud/funcionarios.ticket_transport')}}</label>

                    <select id="recebe_vale_transporte-field" name="recebe_vale_transporte" class="form-control">
                        <option id="Nao" value="Nao">Não</option>
                        <option id="Sim" value="Sim">Sim</option>
                    </select>


                <!--<input type="text" id="recebe_vale_transporte-field" name="recebe_vale_transporte" class="form-control" value="{{ old("recebe_vale_transporte") }}"/> -->
                    @if($errors->has("recebe_vale_transporte"))
                        <span class="help-block">{{ $errors->first("recebe_vale_transporte") }}</span>
                    @endif
                </div>


                <!-- Fim 4 itens -->

                <!-- 2 itens -->

                <div class="form-group col-md-6 minimal-padding first-item @if($errors->has('endereco')) has-error @endif">
                    <label for="endereco-field">{{trans('crud/funcionarios.adress')}}</label>
                    <input type="text" required="" id="endereco-field" name="endereco" class="form-control"
                           value="{{ old("endereco") }}"
                            placeholder="Rua exemplo, N 00, Bairro-Estado CEP: 57000-000"

                    />
                    @if($errors->has("endereco"))
                        <span class="help-block">{{ $errors->first("endereco") }}</span>
                    @endif
                </div>
                {{--Arrumar isso no futuro--}}
                <div class="form-group col-md-3 minimal-padding @if($errors->has('filiacaopai')) has-error @endif">
                    <label for="filiacao-pai-field">{{trans('crud/funcionarios.father')}}</label>
                    <input type="text" id="filiacao-pai-field" name="filiacaopai" class="form-control"
                           value="{{ old("filiacaopai") }}"/>
                    @if($errors->has("filiacaopai"))
                        <span class="help-block">{{ $errors->first("filiacaopai") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('filiacaomae')) has-error @endif">
                    <label for="filiacao-mae-field">{{trans('crud/funcionarios.mother')}}</label>
                    <input type="text" id="filiacao-mae-field" name="filiacaomae" class="form-control"
                           value="{{ old("filiacaomae") }}"/>
                    @if($errors->has("filiacao"))
                        <span class="help-block">{{ $errors->first("filiacaomae") }}</span>
                    @endif
                </div>

                <!-- Fim 2 itens -->


                <!-- 2 itens -->


                <div class="form-group col-md-6 minimal-padding first-item @if($errors->has('nome_conjuge')) has-error @endif">
                    <label for="nome_conjuge-field">{{trans('crud/funcionarios.spouse')}}</label>
                    <input type="text" id="nome_conjuge-field" name="nome_conjuge" class="form-control"
                           value="{{ old("nome_conjuge") }}"/>
                    @if($errors->has("nome_conjuge"))
                        <span class="help-block">{{ $errors->first("nome_conjuge") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-6 minimal-padding last-item @if($errors->has('filhos')) has-error @endif">
                    <label for="filhos-field">{{trans('crud/funcionarios.children')}}</label>
                    <input type="text" id="filhos-field" name="filhos" class="form-control"
                           value="{{ old("filhos") }}"/>
                    @if($errors->has("filhos"))
                        <span class="help-block">{{ $errors->first("filhos") }}</span>
                    @endif
                </div>

                <!-- Fim 2 itens -->

                <!-- 4 itens -->

                <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('banco_tipo')) has-error @endif">
                    <label for="banco_tipo-field">{{trans('crud/funcionarios.acount_type')}}</label>

                @include('funcionarios.partials.bancosTipoConta')


                <!--<input type="text" id="banco_tipo-field" name="banco_tipo" class="form-control" value="{{ old("banco_tipo") }}"/>-->

                    @if($errors->has("banco_tipo"))
                        <span class="help-block">{{ $errors->first("banco_tipo") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('banco')) has-error @endif">
                    <label for="banco-field">{{trans('crud/funcionarios.bank_name')}}</label>

                @include('funcionarios.partials.bancos')

                <!--<input type="text" id="banco-field" name="banco" class="form-control" value="{{ old("banco") }}"/>-->
                    @if($errors->has("banco"))
                        <span class="help-block">{{ $errors->first("banco") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('banco_conta')) has-error @endif">
                    <label for="banco_conta-field">{{trans('crud/funcionarios.acount_number')}}</label>
                    <input type="text" required="" id="banco_conta-field" name="banco_conta" class="form-control"
                           value="{{ old("banco_conta") }}"/>
                    @if($errors->has("banco_conta"))
                        <span class="help-block">{{ $errors->first("banco_conta") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('banco_agencia')) has-error @endif">
                    <label for="banco_agencia-field">{{trans('crud/funcionarios.acount_agency')}}</label>
                    <input type="text" required="" id="banco_agencia-field" name="banco_agencia" class="form-control"
                           value="{{ old("banco_agencia") }}"/>
                    @if($errors->has("banco_agencia"))
                        <span class="help-block">{{ $errors->first("banco_agencia") }}</span>
                    @endif
                </div>

                <!-- Fim 4 itens -->

                <!-- 4 itens -->

                <div class="form-group col-md-3 minimal-padding first-item @if($errors->has('cbo')) has-error @endif">
                    <label for="cbo-field">{{trans('crud/funcionarios.cbo')}}</label>
                    <input type="text" id="cbo-field" name="cbo" class="form-control" value="{{ old("cbo") }}"/>
                    @if($errors->has("cbo"))
                        <span class="help-block">{{ $errors->first("cbo") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('aso')) has-error @endif">
                    <label for="aso-field">{{trans('crud/funcionarios.aso')}}</label>
                    <input type="text" id="aso-field" name="aso" class="form-control" value="{{ old("aso") }}"/>
                    @if($errors->has("aso"))
                        <span class="help-block">{{ $errors->first("aso") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding @if($errors->has('referencia')) has-error @endif">
                    <label for="referencia-field">{{trans('crud/funcionarios.ref')}}</label>
                    <input type="text" id="referencia-field" name="referencia" class="form-control"
                           value="{{ old("referencia") }}"/>
                    @if($errors->has("referencia"))
                        <span class="help-block">{{ $errors->first("referencia") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-3 minimal-padding last-item @if($errors->has('preenchida_por')) has-error @endif">
                    <label for="preenchida_por-field">{{trans('crud/funcionarios.completed_by')}}</label>
                    <input type="text" id="preenchida_por-field" readonly="" name="preenchida_por" readonly=""
                           class="form-control" value="{{ Auth::user()->name }}"/>
                    @if($errors->has("preenchida_por"))
                        <span class="help-block">{{ $errors->first("preenchida_por") }}</span>
                    @endif
                </div>

                <!-- Fim 4 itens -->

                <div class="form-group col-md-12 first-item last-item @if($errors->has('obs')) has-error @endif">
                    <label for="obs-field">{{trans('crud/funcionarios.obs')}}</label>
                    <input type="text" id="obs-field" name="obs" class="form-control" value="{{ old("obs") }}"/>
                    @if($errors->has("obs"))
                        <span class="help-block">{{ $errors->first("obs") }}</span>
                    @endif
                </div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">{{trans('crud/crud.create')}}</button>
                    <a class="btn btn-link pull-right" href="{{ route('funcionarios.index') }}"><i
                                class="glyphicon glyphicon-backward"></i> {{trans('crud/crud.back')}}</a>
                </div>
            </form>

        </div>
    </div>
@endsection