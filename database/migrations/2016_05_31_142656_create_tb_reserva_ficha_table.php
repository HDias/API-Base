<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbReservaFichaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_reserva_ficha', function(Blueprint $table)
		{
			$table->integer('id_reserva_ficha', true);
			$table->integer('id_reserva_tipo')->index('fk_tb_reserva_ficha_tb_tipo_reserva_idx');
			$table->string('numero', 45);
			$table->integer('status')->nullable()->default(0);
			$table->dateTime('datahora');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_reserva_ficha');
	}

}
