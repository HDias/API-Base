<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbNormaRegulamentarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_norma_regulamentar', function(Blueprint $table)
		{
			$table->foreign('id_termo_notificacao', 'fk_tb_norma_regulamentar_tb_termo_notificacao1')->references('id_termo_notificacao')->on('tb_termo_notificacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_norma_regulamentar', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_norma_regulamentar_tb_termo_notificacao1');
		});
	}

}
