<select id="estado_civil-field" name="estado_civil" class="form-control" >


	<?php 

	$lista  = [ 
	"Solteiro" =>"Solteiro",
	"Casado" =>"Casado",
	"Divorciado" =>"Divorciado",
	"Viuvo" =>"Viuvo",
	];

	foreach ($lista as $key => $value) {

		if(isset($funcionario)){

			if ($value == $funcionario->estado_civil){
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