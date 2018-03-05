@extends('layout')

@section('content')

    <!-- Jquery Core Js -->
    <script src="/componentes/signature/js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/componentes/signature/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select Js -->
    <script src="/componentes/signature/js/bootstrap-select.js"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link href="/componentes/signature/css/jquery.signaturepad.css" rel="stylesheet">
    <script src="/componentes/signature/js/numeric-1.2.6.min.js"></script>
    <script src="/componentes/signature/js/bezier.js"></script>
    <script src="/componentes/signature/js/jquery.signaturepad.js"></script>

    <script type='text/javascript'
            src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
    <script src="/componentes/signature/js/json2.min.js"></script>


    {{--<form class="formveste" method="POST" action="/veste/storeentregarveste">--}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="hidden" value="{{auth()->user()->id}}" name="idusuario">

        <div class="mdl-grid">

            <div class="mdl-textfield mdl-js-textfield getmdl-select getmdl-select__fix-height mdl-cell mdl-cell--12-col">
                <input type="text" value="" class="mdl-textfield__input" id="funcionario" readonly>
                <input type="hidden" value="funcionario" name="idfuncionario">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                <label for="funcionario" class="mdl-textfield__label">Funcionário</label>
                <ul for="funcionario" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                    @foreach($funcionarios as $funcionario)
                        <li class="mdl-menu__item" data-val="{{$funcionario->id}}">{{$funcionario->nome}}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mdl-textfield mdl-js-textfield getmdl-select getmdl-select__fix-height mdl-cell mdl-cell--12-col">
                <input type="text" value="" class="mdl-textfield__input" id="veste" readonly>
                <input type="hidden" value="veste" name="idveste">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                <label for="veste" class="mdl-textfield__label">Veste</label>
                <ul for="veste" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                    @foreach($vestes as $veste)
                        <li class="mdl-menu__item" data-val="{{$veste->id}}">{{$veste->tipo}}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
                <textarea class="mdl-textfield__input" type="text" rows="3" id="obs" name="obs"></textarea>
                <label class="mdl-textfield__label" for="obs">Observações</label>
            </div>


        </div>


        <div>
            <h1>
                Draw
            </h1>
            <div class="wrapper">
                <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
            </div>
            <div>
                <button id="save">Save</button>
                <button id="clear">Clear</button>
            </div>

        </div>


        <div class="mdl-cell mdl-cell--12-col">
            <input class="btn btn-success" style="width: 100%;" type="submit" name="bnt-enviar" value="Cadastrar">
        </div>
  {{--  </form>--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>

    <script>


        var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
            backgroundColor: 'rgba(255, 255, 255, 0)',
            penColor: 'rgb(255, 0, 0)'
        });

        var saveButton = document.getElementById('save');
        var cancelButton = document.getElementById('clear');

        saveButton.addEventListener('click', function (event) {
            var data = signaturePad.toDataURL('image/png');


            html2canvas([document.getElementById('signature-pad')]), {
                onrendered: function (canvas) {
                    var canvas_img_data = canvas.toDataURL('image/png');
                    var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
                    $.ajax({
                        url: '/veste/assinaturapost',
                        type: 'POST',
                        data: {img_data: img_data},
                        dataType: 'json',
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            };
        });


        cancelButton.addEventListener('click', function (event) {
            signaturePad.clear();
        });


    </script>


    {{--<script>
        $('#signArea').signaturePad({drawOnly: true, drawBezierCurves: true, lineTop: 90});

        $(function () {
            jQuery('form.formveste').submit(function () {


                html2canvas([document.getElementById('sign-pad')], {
                    onrendered: function (canvas) {
                        var canvas_img_data = canvas.toDataURL('image/png');
                        var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
                        $.ajax({
                            url: '/veste/assinaturapost',
                            type: 'POST',
                            data: { img_data:img_data },
                            dataType: 'json',
                            beforeSend: iniciaPreloader()
                        }).done(function (data) {
                            alert(data);
                        }).fail(function () {
                            alert('falha');
                        });
                    }
                });


            });
        });

        function iniciaPreloader() {
            jQuery(".btn-enviar").attr("disabled");
        }
    </script>
--}}

    {{--
     OK
     <script>
            $('#signArea').signaturePad({drawOnly: true, drawBezierCurves: true, lineTop: 90});

            $(function () {
                jQuery('form.formveste').submit(function () {

                    var dadosForm = jQuery(this).serialize();
                    //var canvas_img_data = canvas.toDataURL('image/png');
                    //var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");

                    jQuery.ajax({
                        url: "/veste/assinaturapost",
                        type: "POST",
                        data: dadosForm,
                        beforeSend: iniciaPreloader()
                    }).done(function (data) {
                        alert(data);
                    }).fail(function () {
                        alert("falha");
                    });
                    return false;

                });
            });

            function iniciaPreloader() {
                jQuery(".btn-enviar").attr("disabled");
            }
        </script>--}}



    {{-- <script>

         //  $('#signArea').signaturePad({drawOnly: true, drawBezierCurves: true, lineTop: 90});

         $(function () {
             jQuery('form.formveste').submit(function () {
                 var dadosForm = jQuery(this).serialize();

                 html2canvas([document.getElementById('sign-pad')], {
                     onrendered: function (canvas) {
                         var canvas_img_data = canvas.toDataURL('image/png');
                         var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
                         $.ajax({
                             url: '/veste/assinaturapost',
                             type: 'POST',
                             data: dadosForm,
                             dataType: 'json',
                             beforeSend: iniciaPreloader()
                         }).done(function (data) {
                             alert(data);
                         }).fail(function () {
                             alert('falha');
                         });
                     }
                 });
             });
         });


         function iniciaPreloader() {
             jQuery(".btn-enviar").attr("disabled");
         }
     </script>--}}



    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>


     <script>
         $(function () {
             jQuery('form.formveste').submit(function () {

                 var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                     backgroundColor: 'rgba(255, 255, 255, 0)',
                     penColor: 'rgb(0, 0, 0)'
                 });
                 var data = signaturePad.toDataURL('image/png');


                 var dadosForm = jQuery(this).serialize();
                 jQuery.ajax({
                     url: "/veste/assinaturapost",
                     type: "POST",
                     data: dadosForm,
                     beforeSend: iniciaPreloader()
                 }).done(function (data) {
                     alert(data);
                 }).fail(function () {
                     alert("falha");
                 });
                 return false;
             });
         });

         function iniciaPreloader() {
             jQuery(".btn-enviar").attr("disabled");
         }
     </script>--}}

    {{--     <script>
             var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                 backgroundColor: 'rgba(255, 255, 255, 0)',
                 penColor: 'rgb(0, 0, 0)'
             });
             var saveButton = document.getElementById('save');
             var cancelButton = document.getElementById('clear');

             saveButton.addEventListener('click', function (event) {
                 var data = signaturePad.toDataURL('image/png');

                 //Send data to server instead...
                 //window.open(data);
                 $.ajax({
                     url: 'veste/assinaturapost',
                     data: data.toDataURL(),
                     type: 'POST',
                     dataType: 'json',
                     contentType: 'image/png', // Informa o mime-type da imagem que por padrão é PNG
                     processData: false //Informa ao jQuery.ajax para não converter os dados em application/x-www-form-urlencoded
                 }).done(function () {
                     alert(data);
                 }).fail(function () {
                     alert('falha');
                 });
             });

             cancelButton.addEventListener('click', function (event) {
                 signaturePad.clear();
             });


         </script>--}}

@endsection
