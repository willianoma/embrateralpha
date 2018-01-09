<?php

use Illuminate\Database\Seeder;
use App\Funcionario;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class FuncionarioTableSeeder extends Seeder {

	public function run()
	{
		DB::table('funcionarios')->delete();

		Funcionario::create([
			'profleimage'=>'profilesimages/99999999.jpg',
			'nome'=>'teste2',
			'posto'=>'null',
			'cpf'=>'null',
			'rg'=>'null',
			'ctps'=>'null',
			'endereco'=>'null',
			'nascimento'=>'null',
			'pis_pasep'=>'99999999',
			'reservista'=>'null',
			'titulo_eleitor'=>'null',
			'telefone'=>'null',
			'email'=>'null',
			'data_admissao'=>'null',
			'funcao'=>'null',
			'farda'=>'null',
			'bota'=>'null',
			'filiacao'=>'null',
			'filhos'=>'null',
			'banco'=>'null',
			'banco_conta'=>'null',
			'banco_agencia'=>'null',
			'banco_tipo'=>'null',
			'contato_emergencia'=>'null',
			'tipo_sanguineo'=>'null',
			'estado_civil'=>'null',
			'nome_conjuge'=>'null',
			'grau_instrucao'=>'null',
			'deficiencia'=>'null',
			'recebe_vale_transporte'=>'null',
			'cargo'=>'null',
			'cbo'=>'null',
			'aso'=>'null',
			'referencia'=>'null',
			'preenchida_por'=>'null',
			'obs'=>'null',
			'horario'=>'null',
			'tipo'=>'null',
			'status'=>'Ativo',
			]);

	}

}