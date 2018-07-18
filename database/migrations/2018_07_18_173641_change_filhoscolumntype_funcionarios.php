<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFilhoscolumntypeFuncionarios extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //DB::statement("update funcionarios SET filhos = '' WHERE filhos <> ''");
        Schema::table('funcionarios', function ($table) {
            $table->dropcolumn('filhos');
        });
        Schema::table('funcionarios', function ($table) {

            $table->string('filhos');
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
