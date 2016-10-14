<select id="tipo-field" name="tipo" class="form-control">
	<?php 

	$tipohorario  = [
	"Diarista" => "Diarista",
	"Plantonista" => "Plantonista", ];

	foreach ($tipohorario as $key => $value) {

		if(isset($funcionario)){
			if ($value == $funcionario->tipo){
				echo "<option selected=''>";	
				echo $value;
				echo " </option>";

			}else{
				echo "<option>";
				echo $value;

				echo " </option>";
			}

		}else{
			echo "<option>";
			echo $value;
			echo " </option>";
		}
	}

	?>
</select>