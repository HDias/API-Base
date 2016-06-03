<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbEstadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_estado', function(Blueprint $table)
		{
			$table->integer('id_estado', true);
			$table->string('descricao', 100);
			$table->string('uf', 2);
			$table->integer('pais')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_estado');
	}

}
