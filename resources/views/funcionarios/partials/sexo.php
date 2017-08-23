<select id="sexo-field" name="sexo" class="form-control">
    <?php

    $lista = [
        "Masculino" => "Masculino",
        "Feminino" => "Feminino",
    ];


    foreach ($lista as $key => $value) {

        if (isset($funcionario)) {

            if ($value == $funcionario->sexo) {
                echo "<option selected=''>";
                echo $value;
                echo " </option>";
            } else {
                echo "<option>";
                echo $value;

                echo " </option>";
            }
        } else {
            echo "<option>";
            echo $value;

            echo " </option>";
        }
    }

    ?>


</select>