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


        </div>


        <body>
        <button type="button" class="mdl-button show-modal">Colher assinatura</button>
        <dialog class="mdl-dialog" style="width: auto">
            <div class="mdl-dialog__content">
                <p>


                <div class="mdl-cell mdl-cell--12-col">
                    <div id="signArea">
                        <h2 class="tag-info">Assinatura</h2>
                        <div class="sig sigWrapper" style="height:auto;">
                            <div class="typed"></div>
                            <canvas class="sign-pad" id="sign-pad" width="400" height="100"></canvas>
                        </div>
                        <script>
                            screen.orientation.lock('landscape');
                            $('#signArea').signaturePad({drawOnly: true, drawBezierCurves: true, lineTop: 90});


                            $("#btnSaveSign").click(function (e) {
                                html2canvas([document.getElementById('sign-pad')], {
                                    onrendered: function (canvas) {
                                        var canvas_img_data = canvas.toDataURL('image/png');
                                        var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
                                        //ajax call to save image inside folder
                                        $.ajax({
                                            url: 'save_sign.php',
                                            data: {img_data: img_data},
                                            type: 'post',
                                            dataType: 'json',
                                            success: function (response) {
                                                window.location.reload();
                                            }
                                        });
                                    }
                                });
                            });
                        </script>

                      {{--  <button id="btnSaveSign">Save Signature</button>--}}

                    </div>


                </div>


                </p>
            </div>
            <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
                <button type="button" class="mdl-button">Agree</button>
                <button type="button" class="mdl-button close">Disagree</button>
            </div>
        </dialog>
        <script>
            var dialog = document.querySelector('dialog');
            var showModalButton = document.querySelector('.show-modal');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            showModalButton.addEventListener('click', function () {
                dialog.showModal();
            });
            dialog.querySelector('.close').addEventListener('click', function () {
                dialog.close();
            });
        </script>
        </body>


    </form>












@endsection
