<select id="funcao-field" name="funcao" class="form-control" >

	<?php 

	$lista  = [ 
	"Faxineiro" =>"Faxineiro",
	"Fiscal" =>"Fiscal",
	"AuxiliarAdministrativo" =>"Auxiliar Administrativo",
	];

	foreach ($lista as $key => $value) {

		if(isset($funcionario)){

			if ($value == $funcionario->funcao){
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