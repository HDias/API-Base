<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbSelectFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_select_form', function(Blueprint $table)
		{
			$table->integer('id_select_form', true);
			$table->integer('id_tipo_select')->index('fk_tb_select_form_tb_tipo_select1_idx');
			$table->string('descricao', 100);
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
		Schema::drop('tb_select_form');
	}

}
