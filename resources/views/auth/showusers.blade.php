@extends('layout')
@section('header')
    <h7>Controle Usuários</h7>
@endsection
@section('content')


    <!-- Simple list -->
    <style>
        table {
            width: 100%;
        }
    </style>


        <div class="col-md-6">
            <table class="mdl-data-table mdl-js-data-table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Usuários</th>
                    <th>LastLogin</th>
                </tr>
                </thead>
                <tbody>
                @foreach($logLogins as $logLogin)

                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">{{$logLogin->username}}</td>
                        <td>{{date_format($logLogin->created_at,'H:i:s d-m-Y')}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <?php echo $logLogins->render(); ?>
        </div>


    <div class="col-md-6">
        <table class="mdl-data-table mdl-js-data-table">
            <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Usuários Cadastrados</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)

                <tr>
                    <td class="mdl-data-table__cell--non-numeric"> {{$user->email}}</td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection