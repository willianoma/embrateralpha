@extends('layout')

@section('content')
    <form action="#">

        <div class="mdl-grid">

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Text...</label>
            </div>


            <div class="mdl-textfield mdl-js-textfield getmdl-select mdl-cell mdl-cell--12-col">
                <input type="text" value="" class="mdl-textfield__input" id="sample2" readonly>
                <input type="hidden" value="" name="sample2">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                <label for="sample2" class="mdl-textfield__label">Country</label>
                <ul for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                    <li class="mdl-menu__item" data-val="DEU">Germany</li>
                    <li class="mdl-menu__item" data-val="BLR">Belarus</li>
                    <li class="mdl-menu__item" data-val="RUS">Russia</li>
                </ul>

            </div>


            <div class="mdl-cell mdl-cell--12-col">2 (4 phone)</div>

        </div>


    </form>
@endsection

funcionario
veste
usuario
asssinatura
obs