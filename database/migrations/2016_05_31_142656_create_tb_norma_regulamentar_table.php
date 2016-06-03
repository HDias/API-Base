<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbNormaRegulamentarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_norma_regulamentar', function(Blueprint $table)
		{
			$table->integer('id_norma_regulamentar', true);
			$table->integer('id_termo_notificacao')->index('fk_tb_norma_regulamentar_tb_termo_notificacao1_idx');
			$table->string('item', 45);
			$table->date('prazo');
			$table->string('norma', 100);
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
		Schema::drop('tb_norma_regulamentar');
	}

}
