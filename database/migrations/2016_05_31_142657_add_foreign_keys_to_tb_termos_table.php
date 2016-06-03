<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbTermosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_termos', function(Blueprint $table)
		{
			// $table->foreign('id_termo_visita_fiscal', 'fk_tb_termos_tb_termo_visita_fiscal1')->references('id_termo_visita_fiscal')->on('tb_termo_visita_fiscal')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_termos', function(Blueprint $table)
		{
			// $table->dropForeign('fk_tb_termos_tb_termo_visita_fiscal1');
		});
	}

}
