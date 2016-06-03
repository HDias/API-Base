<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_cidade', function(Blueprint $table)
		{
			$table->integer('id_cidade')->primary();
			$table->string('descricao', 100);
			$table->integer('id_estado')->index('fk_tb_cidade_tb_estado1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_cidade');
	}

}
