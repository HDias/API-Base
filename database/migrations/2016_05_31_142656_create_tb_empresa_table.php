<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbEmpresaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_empresa', function(Blueprint $table)
		{
			$table->integer('id_empresa', true);
			$table->integer('id_endereco')->index('fk_tb_empresa_tb_endereco1_idx');
			$table->string('cnpj', 25);
			$table->string('nome_empresarial', 150);
			$table->string('nome_fantasia', 150);
			$table->string('ccp', 45);
			$table->string('atividade', 150);
			$table->string('inscricao_municipal', 45);
			$table->string('telefone_empresarial', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_empresa');
	}

}
