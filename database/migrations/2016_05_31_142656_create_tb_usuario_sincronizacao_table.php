<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbUsuarioSincronizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_usuario_sincronizacao', function(Blueprint $table)
		{
			$table->integer('id_usuario_sincronizacao', true);
			$table->integer('id_user')->index('fk_tb_usuario_sincronizacao_users1_idx');
			$table->dateTime('datahora_usuario')->nullable();
			$table->dateTime('datahora_endereco')->nullable();
			$table->dateTime('datahora_empresa')->nullable();
			$table->dateTime('datahora_termo_visita_fiscal')->nullable();
			$table->dateTime('datahora_termo_notificacao')->nullable();
			$table->dateTime('datahora_tipo_reserva')->nullable();
			$table->dateTime('datahora_reserva_ficha')->nullable();
			$table->dateTime('datahora_norma_regulamentar')->nullable();
			$table->dateTime('datahora_tipo_select')->nullable();
			$table->dateTime('datahora_select_form')->nullable();
			$table->dateTime('datahora_usuario_tipo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_usuario_sincronizacao');
	}

}
