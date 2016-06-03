<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbEmpresaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_empresa', function(Blueprint $table)
		{
			$table->foreign('id_endereco', 'fk_tb_empresa_tb_endereco1')->references('id_endereco')->on('tb_endereco')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_empresa', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_empresa_tb_endereco1');
		});
	}

}
