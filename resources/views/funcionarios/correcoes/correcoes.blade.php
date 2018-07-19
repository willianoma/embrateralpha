@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h4>
            <i class="glyphicon glyphicon-align-justify"></i> Coreção de campos
        </h4>

    </div>

@endsection

@section('content')

    <script>
        function marcardesmarcar() {
            $('.marcar').each(function () {
                if (this.checked) this.checked = false;
                else this.checked = true;
            });
        }
    </script>




    <form method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="table table-bordered mdl-shadow--2dp mdl-grid mdl-cell--12-col">
            <a>Escolha os campos</a>
        </div>

        <div class="table table-bordered mdl-shadow--2dp mdl-grid mdl-cell--12-col">

            <button style="width: 100%;" class='btn btn-warning' type='button' title='Todos' id='todos'
                    onclick='marcardesmarcar();'>Marcar Todos
            </button>

        </div>

        <?$count = count($campos)?>
        <div class="table table-bordered mdl-shadow--2dp mdl-grid mdl-cell--12-col">
            @for ($i = 0; $i < $count; $i++)
                <div class="mdl-cell--4-col">
                    <input type="checkbox" class="marcar" name="camposelecionado[]" value="{{$campos[$i]}}"/>
                    <a>{{$campos[$i]}}</a>
                </div>
            @endfor

        </div>

        <div class="table table-bordered mdl-shadow--2dp mdl-grid mdl-cell--12-col">

            <input class="btn btn-success" style="width: 100%" type="submit" value="Buscar Erros">
        </div>
    </form>


    <div class="mdl-grid">




            @foreach($funcionariosPendente as $funcionariopendente)
                <div class="mdl-cell mdl-cell--12-col">

                    <table class="table table-striped mdl-shadow--2dp mdl-cell mdl-cell--12-col">
                        <thead>
                        <tr class="mdl-card__title-text">
                            <th class="mdl-cell mdl-cell--12-col"><a>{{$funcionariopendente['campo']}}</a></th>
                        </tr>
                        </thead>
                        <thead>

                        <tr class="mdl-cell mdl-cell--12-col">
                            <th class="mdl-cell mdl-cell--6-col">Nome</th>
                            <th class="mdl-cell mdl-cell--6-col text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($funcionariopendente['funcionarios'] as $funcpendente)
                            <tr class="mdl-cell mdl-cell--12-col">

                                <td class="mdl-cell mdl-cell--6-col"><a>{{$funcpendente->nome}}</a></td>

                                <td class="mdl-cell mdl-cell--6-col text-right">
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('funcionarios.show', $funcpendente->id) }}"><i
                                                class="glyphicon glyphicon-eye-open"></i> {{trans('crud/crud.show')}}
                                    </a>
                                    <a class="btn btn-xs btn-warning"
                                       href="{{ route('funcionarios.edit', $funcpendente->id) }}"><i
                                                class="glyphicon glyphicon-edit"></i> {{trans('crud/crud.edit')}}</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach


    </div>


















    {{--


        <div class="row">


            <div class="col-12">
                @if(count($funcionarios))
                    <table class="table table-striped " style="overflow: scroll;">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">{{trans('crud/funcionarios.name')}}</th>
                            <th scope="col">{{trans('crud/funcionarios.station')}}</th>
                            <th scope="col">CPF</th>
                            <th scope="col">RG</th>
                            <th scope="col">CTPS</th>
                            <th scope="col">ENDERECO</th>
                            <th scope="col">NASCIMENTO</th>
                            <th scope="col">PIS_PASEP</th>
                            <th scope="col">DATA_ADMISSAO</th>
                            <th scope="col">{{trans('crud/funcionarios.schedule')}}</th>
                            <th scope="col">{{trans('crud/funcionarios.workload')}}</th>
                            <th scope="col">{{trans('crud/funcionarios.status')}}</th>
                            <th scope="col">SEXO</th>

                        --}}{{--    <th>FILHOS</th>--}}{{--
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
                            <th scope="col" class="text-right">{{trans('crud/crud.options')}}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($funcionarios as $funcionario)

                            <tr>
                                <th scope="row">{{$funcionario->id}}</th>
                                --}}{{--<td></td>--}}{{--
                                <td>{{$funcionario->nome}}</td>
                                <td>{{$funcionario->posto}}</td>
                                <td>{{$funcionario->cpf}}</td>
                                <td>{{$funcionario->rg}}</td>
                                @if($funcionario->ctps=='')
                                    <td><b>{{$funcionario->ctps = "PREENCHER"}}</b></td>
                                @else
                                    <td>{{$funcionario->ctps}}</td>
                                @endif
                                <td>{{$funcionario->endereco}}</td>
                                @if($funcionario->nascimento=='')
                                    <td><b>{{$funcionario->nascimento = "PREENCHER"}}</b></td>
                                @else
                                    <td>{{$funcionario->nascimento}}</td>
                                @endif
                                <td>{{$funcionario->pis_pasep}}</td>
                                @if($funcionario->data_admissao== '')
                                    <td><b>{{$funcionario->data_admissao = "PREENCHER"}}</b></td>
                                @else
                                    <td>{{$funcionario->data_admissao}}</td>
                                @endif

                                <td>{{$funcionario->horario}}</td>
                                <td>{{$funcionario->tipo}}</td>
                                <td>{{$funcionario->status}}</td>
                                @if($funcionario->sexo== '')
                                    <td><b>{{$funcionario->sexo = "PREENCHER"}}</b></td>
                                @else
                                    <td>{{$funcionario->sexo}}</td>
                            @endif


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
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('funcionarios.show', $funcionario->id) }}"><i
                                                class="glyphicon glyphicon-eye-open"></i> {{trans('crud/crud.show')}}</a>
                                    <a class="btn btn-xs btn-warning"
                                       href="{{ route('funcionarios.edit', $funcionario->id) }}"><i
                                                class="glyphicon glyphicon-edit"></i> {{trans('crud/crud.edit')}}</a>
                                    <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST"
                                          style="display: inline;"
                                          onsubmit="if(confirm('Deletar? Tem certeza?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i
                                                    class="glyphicon glyphicon-trash"></i> {{trans('crud/crud.delete')}}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    --}}{{-- @if($render==true)
                         {!! $funcionarios->render() !!}
                     @endif--}}{{--
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif

            </div>
        </div>


        --}}


@endsection
