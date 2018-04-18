@extends('layout')
@section('header')
    <h7>Usuarios Cadastrados</h7>
@endsection
@section('content')


    <!-- Simple list -->
    <style>
        .demo-list-item {
            width: 300px;
        }
    </style>

    <ul class="demo-list-item mdl-list">
        @foreach($users as $user)
            <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  {{$user->email}}
                </span>
            </li>
        @endforeach
    </ul>



@endsection