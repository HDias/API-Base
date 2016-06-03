<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->unsignedInteger('id_user_tipo');
			//$table->foreign('id_user_tipo', 'fk_tb_usuario_tb_usuario_tipo55')->references('id_usuario_tipo')->on('tb_usuario_tipo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_usuario_tb_usuario_tipo1');
			$table->dropColumn('id_user_tipo');
		});
	}

}
