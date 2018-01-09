<?php

//$users = DB::table('users')->whereNull('updated_at')->get();


var_dump($funcionarios);
die();
foreach ($funcionarios as $funcionario) {
    echo $funcionario->id;
}


?>