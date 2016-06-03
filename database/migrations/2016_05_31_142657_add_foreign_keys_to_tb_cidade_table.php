<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbCidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_cidade', function(Blueprint $table)
		{
			$table->foreign('id_estado', 'fk_tb_cidade_tb_estado1')->references('id_estado')->on('tb_estado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_cidade', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_cidade_tb_estado1');
		});
	}

}
