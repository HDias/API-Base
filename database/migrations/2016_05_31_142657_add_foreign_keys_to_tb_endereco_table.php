<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_endereco', function(Blueprint $table)
		{
			$table->foreign('id_cidade', 'fk_tb_endereco_tb_cidade1')->references('id_cidade')->on('tb_cidade')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_endereco', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_endereco_tb_cidade1');
		});
	}

}
