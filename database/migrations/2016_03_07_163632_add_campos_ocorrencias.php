<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposOcorrencias extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ocorrencias', function (Blueprint $table) {
			$table->string('usuario')->nullable();
			$table->string('posto')->nullable();
			$table->string('ocorrencia')->nullable();
			$table->string('ocorrencia_descricao')->nullable();
			$table->string('ocorrencia_data')->nullable();
			$table->string('funcionarios_envolvido')->nullable();
			$table->string('fiscal_responsavel')->nullable();
			$table->string('anexos')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
