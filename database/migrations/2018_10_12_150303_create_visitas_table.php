<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('idusuario');
            $table->bigInteger('idposto');
            $table->dateTime('horainicio');
            $table->dateTime('horasaida');
            $table->text('descricao');
            $table->text('pendencias');
            $table->string('geolocalizacao');
            $table->enum('status', ['concluido', 'pendente']);
            $table->string('assinatura');
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
        Schema::drop('visitas');
    }

}
