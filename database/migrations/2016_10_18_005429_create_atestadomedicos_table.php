<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateatestadomedicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atestadomedicos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('usuario');
            $table->string('funcionario');
            $table->string('posto');
            $table->text('obs');
            $table->string('datainicio');
            $table->string('datafinal');
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
		Schema::drop('atestadomedicos');
	}

}
