@extends('layout')

@section('content')
    <form action="#">

        <input type="hidden" value="{{auth()->user()->id}}" name="idusuario">

        <div class="mdl-grid">


            <div class="mdl-textfield mdl-js-textfield getmdl-select mdl-cell mdl-cell--12-col">
                <input type="text" value="" class="mdl-textfield__input" id="funcionario" readonly>
                <input type="hidden" value="funcionario" name="funcionario">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                <label for="funcionario" class="mdl-textfield__label">Funcionário</label>
                <ul for="funcionario" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                    <li class="mdl-menu__item" data-val="DEU">Funcionario</li>
                </ul>
            </div>

            <div class="mdl-textfield mdl-js-textfield getmdl-select mdl-cell mdl-cell--12-col">
                <input type="text" value="" class="mdl-textfield__input" id="veste" readonly>
                <input type="hidden" value="veste" name="veste">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                <label for="veste" class="mdl-textfield__label">Veste</label>
                <ul for="veste" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                    <li class="mdl-menu__item" data-val="DEU">Veste</li>
                </ul>
            </div>


            <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
                <textarea class="mdl-textfield__input" type="text" rows="3" id="obs"></textarea>
                <label class="mdl-textfield__label" for="obs">Observações</label>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
                assinatura
            </div>


        </div>


    </form>
@endsection
