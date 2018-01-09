<select  id="cargo-field" name="cargo" class="form-control">



	<?php 

	$lista  = [ 
	"AuxiliardeLimpeza" =>"Auxiliar de Limpeza",
	"AuxiliarAdministrativo" =>"Auxiliar Administrativo",
	];

	foreach ($lista as $key => $value) {

		if(isset($funcionario)){

			if ($value == $funcionario->cargo){
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