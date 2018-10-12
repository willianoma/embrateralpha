<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasPendenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas_pendencias', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('idvisita');
            $table->bigInteger('idusuario');
            $table->text('novadescricao');
            $table->enum('status', ['concluido', 'analise', 'pendente']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('visitas_pendencias');
    }

}
