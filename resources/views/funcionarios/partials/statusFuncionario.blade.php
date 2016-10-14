<select id="status-field" name="status" class="form-control">


	<?php 

	$lista  = [ 
	"Ativo" =>"Ativo",
	"Inativo" =>"Inativo",
	];

	foreach ($lista as $key => $value) {
		if(isset($funcionario)){


			if ($value == $funcionario->status){
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