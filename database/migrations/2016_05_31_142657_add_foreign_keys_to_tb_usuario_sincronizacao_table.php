<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbUsuarioSincronizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_usuario_sincronizacao', function(Blueprint $table)
		{
			
			// $table->foreign('id_user')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_usuario_sincronizacao', function(Blueprint $table)
		{
			// $table->dropForeign('fk_tb_usuario_sincronizacao_users1');
		});
	}

}
