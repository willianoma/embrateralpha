@extends('layoutsite')


@section('content')


    <!-- Square card -->
    <style>
        .demo-card-square.mdl-card {
            width: 100%;
            height: auto;

        }

        .demo-card-square > .mdl-card__title {
            color: #fff;
            background: no-repeat #46B6AC;

        }


    </style>
    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">

        <div class="demo-card-square mdl-card mdl-shadow--6dp " style="text-align:center">
            <div class="mdl-card__title mdl-card--expand ">
                <div class="mdl-cell mdl-cell--12-col ">
                    <h2>Manutenção</h2>
                </div>
            </div>
        </div>
    </div>

@endsection