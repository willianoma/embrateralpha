@extends('layout')




@section('header')
    <div class="">
        <h3>
            <i class="glyphicon glyphicon-align-justify"></i> {{trans('crud/funcionarios.title')}}
            <a class="btn btn-success " href="{{ route('funcionarios.create') }}"><i
                        class="glyphicon glyphicon-plus"></i> {{trans('crud/crud.create')}}</a>
        </h3>

    </div>

@endsection

@if (session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif

@section('content')

    <div class="container-fluid float-sm-left">
        {{--  Buscar Por Posto--}}

        <form action="" method="GET" autocomplete="on">

            <div class="row">


                <div class="col-4">
                    <input type="text" placeholder="Busca Por Nome" name="buscanome" id="buscanome" value=""
                           class="form-control">
                </div>

                <div class="col-3">
                    <select name="postoselecionado" class="form-control">
                        <option selected value="vazio">Selecionar Posto</option>
                        @foreach($postos as $posto)
                            <option>{{$posto->nome}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="col-3">
                    <select name="status" class="form-control">
                        <option value="vazio">Selecionar Status</option>
                        <option selected>Ativo</option>
                        <option>Inativo</option>
                        <option>INSS</option>
                        <option>Férias</option>
                        <option>Maternidade</option>
                    </select>
                </div>


                <div class="col-2">
                    <input type="submit" value="Buscar" class="form-control btn-default">
                </div>

            </div>
        </form>


        <div class="col-lg-12 " style="text-align: right; margin-top: 10px">
            <label>Contagem: </label>
            <label>{{count($funcionarios)}}</label>

        </div>
        <div class="">
            @if(count($funcionarios))
                <table class="table table-condensed table-striped " style="overflow: scroll;">
                    <thead>
                    <tr>
                        {{-- <th style="width: 50px">ID</th>--}}
                        <th style="width: 100px">{{trans('crud/funcionarios.profile_image')}}</th>
                        <th>{{trans('crud/funcionarios.name')}}</th>
                        <th>{{trans('crud/funcionarios.station')}}</th>
                        <th>{{trans('crud/funcionarios.status')}}</th>
                        <th>{{trans('crud/funcionarios.workload')}}</th>
                    {{--<th>{{trans('crud/funcionarios.schedule')}}</th>--}}
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
                        <th class="text-right">{{trans('crud/crud.options')}}</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($funcionarios as $funcionario)
                        <tr>
                            {{--<td>{{$funcionario->id}}</td>--}}
                            <td align="center"><img height="70" width="70" src="{{asset("$funcionario->profleimage")}}">
                            </td>
                        <!--  <td>{{$funcionario->profleimage}}</td> -->
                            <td><a href="{{ route('funcionarios.show', $funcionario->id) }}">{{$funcionario->nome}}</a>
                            </td>
                            <td>{{$funcionario->posto}}</td>
                            <td>{{$funcionario->status}}</td>
                            <td>{{$funcionario->tipo}}</td>
                        {{-- <td>{{$funcionario->horario}}</td>--}}
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
                    <td>{{$funcionario->insalubridade}}</td>
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


                                <div class="container">
                                    <div class="row">

                                        <a class="btn btn-xs btn-primary table-responsive "
                                           href="{{ route('funcionarios.show', $funcionario->id) }}"><i
                                                    class="glyphicon glyphicon-eye-open"></i> {{trans('crud/crud.show')}}
                                        </a>

                                    </div>
                                    <div class="row" style="padding-top: 2px">

                                        <a class="btn btn-xs btn-warning table-responsive"
                                           href="{{ route('funcionarios.edit', $funcionario->id) }}"><i
                                                    class="glyphicon glyphicon-edit"></i> {{trans('crud/crud.edit')}}
                                        </a>

                                    </div>
                                    {{--    <div class="col-4">

                                            <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST"
                                                  style="display: inline;"
                                                  onsubmit="if(confirm('Deletar? Tem certeza?')) { return true } else {return false };">

                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-xs btn-danger"> {{trans('crud/crud.delete')}}
                                                </button>
                                            </form>

                                        </div>--}}
                                </div>


                                {{--
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

                                                            --}}


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @if($render==true)
                    {!! $funcionarios->render() !!}
                @endif
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
