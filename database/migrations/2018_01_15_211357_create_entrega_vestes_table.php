<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregaVestesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega_vestes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idfuncionario');
            $table->integer('idveste');
            $table->integer('iduser');
            $table->string('assinatura');
            $table->string('obs');
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
        Schema::drop('entrega_vestes');
    }

}
