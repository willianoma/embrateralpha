<div id="signArea">
    <h2 class="tag-info">Put signature below,</h2>
    <div class="sig sigWrapper" style="height:auto;">
        <div class="typed"></div>
        <canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
    </div>
</div>


<script>


    var wrapper = document.getElementById("signature-pad"),
        clearButton = wrapper.querySelector("[data-action=clear]"),
        saveButton = wrapper.querySelector("[data-action=save]"),
        canvas = wrapper.querySelector("canvas"),
        signaturePad;

    // Adjust canvas coordinate space taking into account pixel ratio,
    // to make it look crisp on mobile devices.
    // This also causes canvas to be cleared.
    function resizeCanvas() {
// When zoomed out to less than 100%, for some very strange reason,
// some browsers report devicePixelRatio as less than 1
// and only part of the canvas is cleared then.
        var ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }
    window.onresize = resizeCanvas;
    resizeCanvas();
    signaturePad = new SignaturePad(canvas);

    clearButton.addEventListener("click", function (event) {
        signaturePad.clear();
    });

    saveButton.addEventListener("click", function (event) {
        event.preventDefault();
        var nombre_receptor_form = $("#nombre_receptor_form").val();
        var id_nombre_imagen = $("#id_nombre_imagen").val();

        if (signaturePad.isEmpty()) {
            alert("Please insert signature.");
        } else {
            var dataUrl = signaturePad.toDataURL();
            document.getElementById('imagen_firma').src = dataUrl;
            var imagen = dataUrl.replace(/^data:image\/(png|jpg);base64,/, "");
            $.ajax({
                url: './includes/signature_pad.php',
                type: 'POST',
                data: {
                    imageData: imagen
                },
            })
                .done(function (msg) {
// Image saved successfuly.
                    console.log("success: " + msg);
                    document.getElementById("my_form").submit(); //I do this to save other information.
                })
                .fail(function (msg) {
                    console.log("error: " + msg);
                });
</script>