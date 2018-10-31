@extends('layout')

@section('header')

    <div class="clearfix">

        <span>Registro de Ronda</span>

    </div>


    @if($errors->any())

        <ul class="list-group">

            @foreach($errors->all() as $error)

                <li class="list-group-item list-group-item-warning">{{$error}}</li>

            @endforeach

        </ul>


    @endif

    <!-- Square card -->
    <style>
        .demo-card-square.mdl-card {
            width: 100%;

        }

        .demo-card-square > .mdl-card__title {
            color: #fff;
            background: #46B6AC;
        }
    </style>



    <script type="text/javascript">

        function onMapLoad(map) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };


                        var marker = new google.maps.Marker({
                            position: pos,
                            map: map,
                            title: "Location found."
                        });

                        console.log(pos);

                        document.getElementById('geolocalizacao').value = pos.lat + "," + pos.lng;

                        map.setCenter(pos);

                    }
                );
            }
        }
    </script>


@endsection

@section('content')



    <div class="mdl-cell mdl-cell--12-col">

        <form method="POST" action="/visita/store">

            @if($messagem <>'')
                <div class="alert alert-warning" role="alert">
                    <a href="/pendencias">{{$messagem}}</a>
                </div>
            @endif

            <?$tab = 5?>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="idusuario" value="{{Auth::user()->id}}">
            <input type="hidden" name="geolocalizacao" id="geolocalizacao">
            <label id="position"></label>

            <div class="mdl-cell mdl-cell--12-col">

                <div class="demo-card-square mdl-card mdl-shadow--2dp ">

                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Identificação</h2>
                    </div>

                    <div class="">
                        <ul class=" mdl-list">

                            @if($undefined == TRUE)
                                <li class="">
                                    <div class="mdl-grid mdl-cell--12-col">

                                        <div class="mdl-textfield mdl-js-textfield mdl-cell--8-col">
                                            <div>
                                                <label class="">Escolha o Posto</label>
                                            </div>

                                            <select class="mdl-textfield__input" id="idposto" name="idposto">
                                                <option selected>
                                                    {{old("idposto")}}
                                                </option>
                                                @foreach($posto as $pos)
                                                    <option value="{{$pos->id}}">
                                                        {{$pos->nome}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </li>
                            @endif

                            @if($undefined == FALSE)

                                <li class="">
                                    <div class="mdl-grid mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--8-col">
                                            <input tabindex="{{$tab++}}" class="mdl-textfield__input" type="text"
                                                   id="idposto"
                                                   name="idposto" value="{{$posto->id}}">
                                            <label class="mdl-textfield__label" for="idposto">idposto</label>
                                        </div>

                                        <div class="mdl-cell--4-col">
                                            <label class="">{{$posto->razaosocial}}</label>
                                        </div>
                                    </div>
                                </li>

                            @endif


                            <li class="">
                                <div class="mdl-grid mdl-cell--12-col">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
                                        <label class="mdl-textfield__label" for="horainicio">Hora de Início</label>

                                        <input tabindex="{{$tab++}}" class="mdl-textfield__input"
                                               type="datetime-local"
                                               id="horainicio"
                                               name="horainicio"
                                               value="{{old("horainicio")}}"
                                        >
                                    </div>

                                </div>

                            </li>

                            <li class="">
                                <div class="mdl-grid mdl-cell--12-col">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">
                                        <input tabindex="{{$tab++}}" class="mdl-textfield__input" value="{{$datetime}}"
                                               type="datetime-local"
                                               id="horasaida"
                                               name="horasaida">
                                        <label class="mdl-textfield__label" for="horainicio">Hora de Termino</label>
                                    </div>
                                </div>

                            </li>


                        </ul>
                    </div>

                </div>

            </div>


            <div class="mdl-cell mdl-cell--12-col">

                <div class="demo-card-square mdl-card mdl-shadow--2dp ">

                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Visita</h2>
                    </div>

                    <div class="mdl-card__supporting-text mdl-cell mdl-cell--12-col">
                        <ul class="mdl-list ">

                            <li class="">
                                <div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
                                    <textarea tabindex="{{$tab++}}" class="mdl-textfield__input" type="text"
                                              id="descricao"
                                              name="descricao"
                                              style="height: 100px">{{old("descricao")}}</textarea>
                                    <label class="mdl-textfield__label" for="descricao">Descricao</label>
                                </div>
                            </li>

                            <li class="">
                                <div class="mdl-textfield mdl-js-textfield  mdl-cell--12-col">
                                    <textarea tabindex="{{$tab++}}" class="mdl-textfield__input" type="text"
                                              id="pendencias"
                                              name="pendencias"
                                              style="height: 100px">{{old("pendencias")}}</textarea>
                                    <label class="mdl-textfield__label" for="pendencias">pendencias</label>
                                </div>
                            </li>

                            <li>
                                <div style="height: 180px;">
                                    {!! Mapper::render() !!}
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="mdl-cell mdl-cell--12-col">
                <div class="demo-card-square mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Status</h2>
                    </div>

                    <div class="mdl-grid mdl-cell--12-col mdl-card__supporting-text ">

                        <div class="mdl-cell mdl-cell--6-col" style="text-align: center">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="concluido">
                                <input class="mdl-radio__button" id="concluido" name="status" type="radio"
                                       value="concluido"
                                       @if(Input::old('status')=='concluido') checked @endif
                                >
                                <span class="mdl-radio__label">Operacional</span>
                            </label>
                        </div>


                        <div class="mdl-cell mdl-cell--6-col" style="text-align: center">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pendente">
                                <input class="mdl-radio__button" id="pendente" name="status" type="radio"
                                       value="pendente"
                                       @if(Input::old('status')=='pendente') checked @endif
                                >
                                <span class="mdl-radio__label">Pendente</span>
                            </label>
                        </div>

                    </div>

                </div>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
                <div class="demo-card-square mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <div class="mdl-cell--10-col">
                            <h2 class="mdl-card__title-text">Enviar Por E-mail</h2>
                        </div>
                        <div class="pull-right">
                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="sendemail">
                                <input type="checkbox" id="sendemail" name="sendemail" class="mdl-switch__input">
                                <span class="mdl-switch__label"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mdl-cell mdl-cell--12-col" style="text-align: center">
                {{--<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">--}}
                <div class="mdl-cell mdl-cell--12-col">
                    <input tabindex="{{$tab++}}" type="submit" value="Cadastrar"
                           class="btn btn-success btn-lg btn-block">
                </div>

                <div class="mdl-cell mdl-cell--12-col">
                    <a class="btn btn-danger btn-lg btn-block" href="/visita">Cancelar</a>
                </div>

            </div>


    </div>


    </form>



@endsection