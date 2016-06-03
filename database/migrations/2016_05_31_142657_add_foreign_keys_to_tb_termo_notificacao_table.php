<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbTermoNotificacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_termo_notificacao', function(Blueprint $table)
		{
			$table->foreign('id_reserva_ficha', 'fk_tb_termo_notificacao_tb_reserva_ficha1')->references('id_reserva_ficha')->on('tb_reserva_ficha')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_empresa', 'fk_tb_termo_notificacao_tb_empresa1')->references('id_empresa')->on('tb_empresa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			//$table->foreign('id_user', 'fk_tb_termo_notificacao_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_termo_notificacao', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_termo_notificacao_tb_reserva_ficha1');
			$table->dropForeign('fk_tb_termo_notificacao_tb_empresa1');
			// $table->dropForeign('fk_tb_termo_notificacao_users1');
		});
	}

}
