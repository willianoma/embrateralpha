<select id="banco-field" name="banco" class="form-control">
<?php 

	$lista  = [ 
	"BancoDoBrasil" =>"Banco Do Brasil",
	"Caixa" =>"Caixa",
	"Itau" =>"Itaú",
	"Santander" =>"Santander",
	];



	foreach ($lista as $key => $value) {

		if(isset($funcionario)){

			if ($value == $funcionario->banco){
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