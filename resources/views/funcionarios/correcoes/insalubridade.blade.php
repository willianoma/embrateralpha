@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h4>
            <i class="glyphicon glyphicon-align-justify"></i> Coreção de campos
        </h4>

    </div>

@endsection

@section('content')

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
                    <th class="mdl-cell mdl-cell--6-col">Ajuste</th>
                    <th class="mdl-cell mdl-cell--6-col text-right">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($funcionariopendente['funcionarios'] as $funcpendente)
                    <form method="POST" action="/funcionarios/correcoes/insalubridade/{{$funcpendente->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <tr class="mdl-cell mdl-cell--12-col">

                            <td class="mdl-cell mdl-cell--4-col"><a>{{$funcpendente->nome}}</a></td>


                            <td class="mdl-cell mdl-cell--4-col text-right">
                                <select class="form-control" required="" id="insalubridade-field"
                                        name="insalubridade">


                                    <?php


                                    if (isset($funcionario->insalubridade)) {
                                        echo "<option selected=''>";
                                        echo $funcionario->insalubridade;
                                        echo ' </option>';
                                    }

                                    ?>


                                    <option>0%</option>
                                    <option>10%</option>
                                    <option>20%</option>
                                    <option>30%</option>
                                    <option>40%</option>
                                </select>
                            </td>


                            <td class="mdl-cell mdl-cell--4-col text-right">


                                <input class="btn btn-success" value="Atualizar" type="submit">

                                <a class="btn btn-xs btn-primary"
                                   href="{{ route('funcionarios.show', $funcpendente->id) }}"><i
                                            class="glyphicon glyphicon-eye-open"></i> {{trans('crud/crud.show')}}
                                </a>


                            </td>
                        </tr>
                    </form>
                @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
@endsection