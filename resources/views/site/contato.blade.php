@extends('layoutsite')


@section('content')

    <div style="height: 350px">
        {!! Mapper::render() !!}
    </div>

    <script>


        document.getElementById('fale').style.display = "none"; // ou "block"


    </script>



@endsection