<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrigirFuncionariosFilhos extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios_filhos', function ($table) {
            $table->renameColumn('idfuncinario', 'idfuncionario');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionarios_filhos', function ($table) {
            $table->renameColumn('idfuncinario', 'idfuncinario');
        });
    }

}
