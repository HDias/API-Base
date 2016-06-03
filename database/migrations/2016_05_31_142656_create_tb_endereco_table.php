<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_endereco', function(Blueprint $table)
		{
			$table->integer('id_endereco', true);
			$table->integer('id_cidade')->index('fk_tb_endereco_tb_cidade1_idx');
			$table->string('latitude', 45)->nullable();
			$table->string('longitude', 45)->nullable();
			$table->string('cep', 20);
			$table->string('bairro', 60);
			$table->string('logradouro');
			$table->string('numero', 60);
			$table->string('complemento')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_endereco');
	}

}
