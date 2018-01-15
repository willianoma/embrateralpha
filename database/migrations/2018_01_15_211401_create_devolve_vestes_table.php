<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevolveVestesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolve_vestes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identrega');
            $table->integer('idfuncionario');
            $table->integer('idveste');
            $table->integer('iduser');
            $table->string('estadoveste');
            $table->string('foto');
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
        Schema::drop('devolve_vestes');
    }

}
