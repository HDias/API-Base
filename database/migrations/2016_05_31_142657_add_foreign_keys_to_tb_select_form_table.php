<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbSelectFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_select_form', function(Blueprint $table)
		{
			$table->foreign('id_tipo_select', 'fk_tb_select_form_tb_tipo_select1')->references('id_tipo_select')->on('tb_tipo_select')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_select_form', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_select_form_tb_tipo_select1');
		});
	}

}
