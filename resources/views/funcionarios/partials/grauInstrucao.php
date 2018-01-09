<select id="grau_instrucao-field" name="grau_instrucao" class="form-control" >


	<?php 

	$lista  = [ 
	"EnsinoFundamentalIncompleto" =>"Ensino Fundamental Incompleto",
	"EnsinoFundamentalCompleto" =>"Ensino Fundamental Completo",
	"EnsinoMedioIncompleto" =>"Ensino Médio Incompleto",
	"EnsinoMedioCompleto" =>"Ensino Médio Completo",
	"EnsinoSuperiorIncompleto" =>"Ensino Superior Incompleto",
	"EnsinoSuperiorCompleto" =>"Ensino Superior Completo",
	];

	foreach ($lista as $key => $value) {

		if(isset($funcionario)){

			if ($value == $funcionario->grau_instrucao){
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