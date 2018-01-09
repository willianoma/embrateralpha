@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Atestadomedicos / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('atestadomedicos.store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('usuario')) has-error @endif">
                    <label for="usuario-field">Usuario</label>
                    <input type="text" id="usuario-field" name="usuario" class="form-control" readonly=""
                           value="{{ Auth::user()->name }}"/>
                    @if($errors->has("usuario"))
                        <span class="help-block">{{ $errors->first("usuario") }}</span>
                    @endif
                </div>

                <div class="form-group @if($errors->has('funcionario')) has-error @endif">
                    <label for="funcionario-field">Funcionario</label>

                    <select id="funcionario-field" name="funcionario" class="form-control">
                        <?php

                        foreach ($funcionarios as $key => $value) {
                            echo "<option>";
                            echo $value->nome;
                            echo ' </option>';
                        }

                        ?>
                    </select>

                    {{--<input type="text" id="funcionario-field" name="funcionario" class="form-control" value="{{ old("funcionario") }}"/>--}}

                    @if($errors->has("funcionario"))
                        <span class="help-block">{{ $errors->first("funcionario") }}</span>
                    @endif
                </div>

                <div class="form-group @if($errors->has('posto')) has-error @endif">
                    <label for="posto-field">Posto</label>


                    <select id="posto-field" name="posto" class="form-control">
                        <?php

                        foreach ($postos as $key => $value) {
                            echo "<option>";
                            echo $value->nome;
                            echo ' </option>';
                        }

                        ?>
                    </select>

                    {{--input type="text" id="posto-field" name="posto" class="form-control" value="{{ old("posto") }}"/>--}}
                    @if($errors->has("posto"))
                        <span class="help-block">{{ $errors->first("posto") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('obs')) has-error @endif">
                    <label for="obs-field">Obs</label>
                    <textarea class="form-control" id="obs-field" rows="3" name="obs">{{ old("obs") }}</textarea>
                    @if($errors->has("obs"))
                        <span class="help-block">{{ $errors->first("obs") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('datainicio')) has-error @endif">
                    <label for="datainicio-field">Datainicio</label>
                    <input type="date" id="datainicio-field" name="datainicio" class="form-control"
                           value="{{ old("datainicio") }}"/>
                    @if($errors->has("datainicio"))
                        <span class="help-block">{{ $errors->first("datainicio") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('datafinal')) has-error @endif">
                    <label for="datafinal-field">Datafinal</label>
                    <input type="date" id="datafinal-field" name="datafinal" class="form-control"
                           value="{{ old("datafinal") }}"/>
                    @if($errors->has("datafinal"))
                        <span class="help-block">{{ $errors->first("datafinal") }}</span>
                    @endif
                </div>

                <div class="form-group @if($errors->has('referencia')) has-error @endif">
                    <label for="referencia-field">Referencia</label>
                    <input type="file" id="referencia-field" name="referencia" class="form-control"
                           value="{{ old("referencia") }}"/>
                    @if($errors->has("referencia"))
                        <span class="help-block">{{ $errors->first("referencia") }}</span>
                    @endif
                </div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('atestadomedicos.index') }}"><i
                                class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection