<head>
    <link href="{{ asset('/css/formfuncionario.css') }}" rel="stylesheet">
</head>

<style>
    .row {
        padding-left: 10px;
    }
</style>
@extends('layout')
@section('header')
    <div class="page-header">
        <h7>{{trans('crud/crud.show')}} #{{$funcionario->id}}</h7>
        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display: inline;"
              onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group"
                   href="{{ route('funcionarios.edit', $funcionario->id) }}"><i
                            class="glyphicon glyphicon-edit"></i> {{trans('crud/crud.edit')}}</a>
                <button type="submit" class="btn btn-danger">{{trans('crud/crud.delete')}} <i
                            class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')

    <div class="container-fluid">
        <form action="#">
            <div>
                <div class="row">
                    {{--<div class="form-group">
                      <label for="nome">ID</label>
                      <p class="form-control-static">{{$funcionario->id}}</p>
                    </div>--}}


                    {{--2 itens--}}

                    <div class="form-group col-md-6  minimal-padding first-item">
                        {{--<label for="profleimage-field">{{trans('crud/funcionarios.profile_image')}}</label>--}}
                        <img height="90" width="60" src="{{asset("$funcionario->profleimage")}}">
                    <!--<p class="form-control-static">{{$funcionario->profleimage}}</p>-->
                    </div>

                    <div class="form-group col-md-3 form-group minimal-padding ">
                        <label for="nome-field">{{trans('crud/funcionarios.name')}}</label>
                        <p class="form-control-static">{{$funcionario->nome}}</p>
                    </div>

                    <div class="form-group col-md-3 form-group minimal-padding  last-item">
                        <label for="sexo-field">{{trans('crud/funcionarios.sexo')}}</label>
                        <p class="form-control-static">{{$funcionario->sexo}}</p>

                    </div>
                </div>


            {{--fim 2 itens--}}

            <!-- 4 itens -->
                <div class="row">


                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="posto-field">{{trans('crud/funcionarios.station')}}</label>
                        <p class="form-control-static">{{$funcionario->posto}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding ">
                        <label for="status-field">{{trans('crud/funcionarios.status')}}</label>
                        <p class="form-control-static">{{$funcionario->status}}</p>
                    </div>


                    <div class="form-group col-md-3 minimal-padding">
                        <label for="horario-field">{{trans('crud/funcionarios.schedule')}}</label>
                        <p class="form-control-static">{{$funcionario->horario}}</p>
                    </div>


                    <div class="form-group col-md-3 minimal-padding last-item">
                        <label for="tipo-field">{{trans('crud/funcionarios.workload')}}</label>
                        <p class="form-control-static">{{$funcionario->tipo}}</p>
                    </div>
                </div>

                <!-- Fim 4 Itens -->

                <!-- 4 Itens -->

                <div class="row">


                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="cargo-field">{{trans('crud/funcionarios.office')}}</label>
                        <p class="form-control-static">{{$funcionario->cargo}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding">
                        <label for="funcao-field">{{trans('crud/funcionarios.function')}}</label>
                        <p class="form-control-static">{{$funcionario->funcao}}</p>
                    </div>


                    <div class="form-group col-md-3 minimal-padding">
                        <label for="data_admissao-field">{{trans('crud/funcionarios.date_adm')}}</label>
                        <p class="form-control-static">{{$funcionario->data_admissao}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding last-item">
                        <label for="estado_civil-field">{{trans('crud/funcionarios.civil_state')}}</label>
                        <p class="form-control-static">{{$funcionario->estado_civil}}</p>
                    </div>
                </div>

                <!-- Fim 4 Itens -->

                <!-- 4 Itens -->
                <div class="row">

                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="cpf-field">{{trans('crud/funcionarios.cpf')}}</label>
                        <p class="form-control-static">{{$funcionario->cpf}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding">
                        <label for="rg-field">{{trans('crud/funcionarios.rg')}}</label>
                        <p class="form-control-static">{{$funcionario->rg}}</p>
                    </div>


                    <div class="form-group col-md-3 minimal-padding">
                        <label for="ctps-field">{{trans('crud/funcionarios.ctps')}}</label>
                        <p class="form-control-static">{{$funcionario->ctps}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding last-item">
                        <label for="pis_pasep-field">{{trans('crud/funcionarios.pis')}}</label>
                        <p class="form-control-static">{{$funcionario->pis_pasep}}</p>
                    </div>

                </div>

                <!-- Fim 4 Itens -->

                <!-- 4 Itens -->

                <div class="row">

                    <div class="form-group col-md-3 minimal-padding fisrt-item">
                        <label for="reservista-field">{{trans('crud/funcionarios.military_reservist')}}</label>
                        <p class="form-control-static">{{$funcionario->reservista}}</p>

                    </div>

                    <div class="form-group col-md-3 minimal-padding">
                        <label for="titulo_eleitor-field">{{trans('crud/funcionarios.voter_number')}}</label>
                        <p class="form-control-static">{{$funcionario->titulo_eleitor}}</p>
                    </div>


                    <div class="form-group col-md-3 minimal-padding">
                        <label for="nascimento-field">{{trans('crud/funcionarios.born')}}</label>

                        <p class="form-control-static">{{$funcionario->nascimento}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding last-item">
                        <label for="grau_instrucao-field">{{trans('crud/funcionarios.knowledge')}}</label>

                        <p class="form-control-static">{{$funcionario->grau_instrucao}}</p>
                    </div>

                </div>

                <!-- Fim 4 Itens -->

                <!-- 4 Itens -->

                <div class="row">

                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="telefone-field">{{trans('crud/funcionarios.phone')}}</label>

                        <p class="form-control-static">{{$funcionario->telefone}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding">
                        <label for="email-field">{{trans('crud/funcionarios.email')}}</label>
                        <p class="form-control-static">{{$funcionario->email}}</p>
                    </div>


                    <div class="form-group col-md-3 minimal-padding">
                        <label for="tipo_sanguineo-field">{{trans('crud/funcionarios.blood_type')}}</label>
                        <p class="form-control-static">{{$funcionario->tipo_sanguineo}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding last-item">
                        <label for="deficiencia-field">{{trans('crud/funcionarios.special_condition')}}</label>
                        <p class="form-control-static">{{$funcionario->deficiencia}}</p>
                    </div>

                </div>

                <!-- Fim 4 Itens -->

                <!-- 4 Itens -->
                <div class="row">

                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="farda-field">{{trans('crud/funcionarios.uniform')}}</label>
                        <p class="form-control-static">{{$funcionario->farda}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding">
                        <label for="bota-field">{{trans('crud/funcionarios.boot')}}</label>
                        <p class="form-control-static">{{$funcionario->bota}}</p>
                    </div>


                    <div class="form-group col-md-3 minimal-padding">
                        <label for="contato_emergencia-field">{{trans('crud/funcionarios.emergency_contact')}}</label>
                        <p class="form-control-static">{{$funcionario->contato_emergencia}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding last-item">
                        <label for="recebe_vale_transporte-field">{{trans('crud/funcionarios.ticket_transport')}}</label>
                        <p class="form-control-static">{{$funcionario->recebe_vale_transporte}}</p>
                    </div>
                </div>
                <!-- Fim 4 Itens -->


                <!-- 2 Itens -->

                <div class="row">


                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="endereco-field">{{trans('crud/funcionarios.adress')}}</label>
                        <p class="form-control-static">{{$funcionario->endereco}}</p>
                    </div>

                    <div class="form-group col-md-3 form-group minimal-padding last-item">
                        <label for="filiacao-pai-field">{{trans('crud/funcionarios.father'). " e ".trans('crud/funcionarios.mother') }}</label>
                        <p class="form-control-static">{{$funcionario->filiacao}}</p>
                    </div>

                    <!-- Fim 2 Itens -->

                    <!-- 2 Itens -->


                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="nome_conjuge-field">{{trans('crud/funcionarios.spouse')}}</label>
                        <p class="form-control-static">{{$funcionario->nome_conjuge}}</p>
                    </div>

                    <div class="form-group col-md-3 form-group minimal-padding last-item">
                        <label for="filhos-field">{{trans('crud/funcionarios.children')}}</label>
                        @foreach($funcionario->getfilhos as $filhos)
                            <p class="form-control-static">{{$filhos->nome}}</p>
                        @endforeach
                    </div>

                </div>

                <!-- Fim 2 Itens -->

                <!-- 4 Itens -->

                <div class="row">

                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="banco_tipo-field">{{trans('crud/funcionarios.acount_type')}}</label>
                        <p class="form-control-static">{{$funcionario->banco}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding">
                        <label for="banco-field">{{trans('crud/funcionarios.bank_name')}}</label>
                        <p class="form-control-static">{{$funcionario->banco_conta}}</p>


                    </div>

                    <div class="form-group col-md-3 minimal-padding">
                        <label for="banco_conta-field">{{trans('crud/funcionarios.acount_number')}}</label>
                        <p class="form-control-static">{{$funcionario->banco_agencia}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding last-item">
                        <label for="banco_agencia-field">{{trans('crud/funcionarios.acount_agency')}}</label>
                        <p class="form-control-static">{{$funcionario->banco_tipo}}</p>
                    </div>

                </div>
                <!-- Fim 4 Itens -->

                <!-- 4 Itens -->
                <div class="row">

                    <div class="form-group col-md-3 minimal-padding first-item">
                        <label for="cbo-field">{{trans('crud/funcionarios.cbo')}}</label>
                        <p class="form-control-static">{{$funcionario->cbo}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding">
                        <label for="aso-field">{{trans('crud/funcionarios.aso')}}</label>
                        <p class="form-control-static">{{$funcionario->aso}}</p>
                    </div>


                    <div class="form-group col-md-3 minimal-padding">
                        <label for="referencia-field">{{trans('crud/funcionarios.ref')}}</label>
                        <p class="form-control-static">{{$funcionario->referencia}}</p>
                    </div>

                    <div class="form-group col-md-3 minimal-padding last-item">
                        <label for="preenchida_por-field">{{trans('crud/funcionarios.completed_by')}}</label>
                        <p class="form-control-static">{{$funcionario->preenchida_por}}</p>
                    </div>
                </div>

                <!-- Fim 4 Itens -->
                <div class="row">

                    <div class="form-group col-md-12 first-item last-item">
                        <label for="obs-field">{{trans('crud/funcionarios.obs')}}</label>
                        <p class="form-control-static">{{$funcionario->obs}}</p>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="form-group col-md-12">
                <a class="btn btn-link" href="{{ route('funcionarios.index') }}"><i
                            class="glyphicon glyphicon-backward"></i> {{trans('crud/crud.back')}}</a>
            </div>
        </div>

    </div>


@endsection