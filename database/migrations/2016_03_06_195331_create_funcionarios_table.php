<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('profleimage');
            $table->string('nome');
            $table->string('posto');
            $table->string('cpf');
            $table->string('rg');
            $table->string('ctps');
            $table->string('endereco');
            $table->string('nascimento');
            $table->string('pis_pasep');
            $table->string('reservista');
            $table->string('titulo_eleitor');
            $table->string('telefone');
            $table->string('email');
            $table->string('data_admissao');
            $table->string('funcao');
            $table->string('farda');
            $table->string('bota');
            $table->string('filiacao');
            $table->string('filhos');
            $table->string('banco');
            $table->string('banco_conta');
            $table->string('banco_agencia');
            $table->string('banco_tipo');
            $table->string('contato_emergencia');
            $table->string('tipo_sanguineo');
            $table->string('estado_civil');
            $table->string('nome_conjuge');
            $table->string('grau_instrucao');
            $table->string('deficiencia');
            $table->string('recebe_vale_transporte');
            $table->string('cargo');
            $table->string('cbo');
            $table->string('aso');
            $table->string('referencia');
            $table->string('preenchida_por');
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
		Schema::drop('funcionarios');
	}

}
