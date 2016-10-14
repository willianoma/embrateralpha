<select  id="horario-field" name="horario" class="form-control" >

	<?php 

	$lista  = [ 
	"06:00~14:00" =>"06:00~14:00",
	"06:00~15:00" =>"06:00~15:00",
	"06:00~18:00" =>"06:00~18:00",
	"06:30~15:30" =>"06:30~15:30",
	"07:00~13:00" =>"07:00~13:00",
	"07:00~19:00" =>"07:00~19:00",
	"08:00~12:00" =>"08:00~12:00",
	"12:00~19:00" =>"12:00~19:00",
	"13:00~17:00" =>"13:00~17:00",
	"13:00~19:00" =>"13:00~19:00",
	"13:00~21:00" =>"13:00~21:00",
	"18:00~06:00" =>"18:00~06:00",
	"19:00~07:00" =>"19:00~07:00",
	];

	foreach ($lista as $key => $value) {

		if(isset($funcionario)){
			
			if ($value == $funcionario->horario){
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



