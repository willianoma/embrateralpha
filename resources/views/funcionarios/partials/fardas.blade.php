<select id="farda-field" name="farda" class="form-control">

<?php 

	$lista  = [ 
	"pp" => "pp",
	"p" => "p",
	"m" => "m",
	"g" => "g",
	"gg" => "gg",
	"xgg" => "xgg",
	];

    

	foreach ($lista as $key => $value) {

		if(isset($funcionario)){

			if ($value == $funcionario->farda){
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