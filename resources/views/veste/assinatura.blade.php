<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<form class="formulario" method="POST" action="/veste/assinaturapost">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="text" name="email">
    <input type="submit" name="btn-enviar">
</form>


<script>
    $(function () {
        jQuery('form.formulario').submit(function () {
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
</script>
