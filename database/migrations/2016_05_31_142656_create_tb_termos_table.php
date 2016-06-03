<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbTermosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_termos', function(Blueprint $table)
		{
			$table->integer('id_termos', true);
			$table->integer('id_termo_visita_fiscal')->index('fk_tb_termos_tb_termo_visita_fiscal1_idx');
			$table->integer('numero');
			$table->text('descricao', 65535);
			$table->integer('status')->nullable()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_termos');
	}

}
