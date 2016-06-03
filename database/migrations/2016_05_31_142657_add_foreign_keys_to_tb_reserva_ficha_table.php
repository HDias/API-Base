<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbReservaFichaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_reserva_ficha', function(Blueprint $table)
		{
			$table->foreign('id_reserva_tipo', 'fk_tb_reserva_ficha_tb_tipo_reserva')->references('id_reserva_tipo')->on('tb_reserva_tipo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_reserva_ficha', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_reserva_ficha_tb_tipo_reserva');
		});
	}

}
