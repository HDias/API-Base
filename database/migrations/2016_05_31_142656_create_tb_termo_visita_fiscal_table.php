<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbTermoVisitaFiscalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_termo_visita_fiscal', function(Blueprint $table)
		{
			$table->integer('id_termo_visita_fiscal', true);
			$table->integer('id_user')->index('fk_tb_termo_visita_fiscal_users1_idx');
			$table->integer('id_reserva_ficha')->index('fk_tb_termo_visita_fiscal_tb_reserva_ficha1_idx');
			$table->integer('id_divisao_responsavel');
			$table->integer('id_motivo_visita');
			$table->integer('id_categoria');
			$table->integer('id_empresa')->index('fk_tb_termo_visita_fiscal_tb_empresa1_idx');
			$table->integer('id_acoes_educativas')->nullable();
			$table->integer('id_conclusao')->nullable();
			$table->integer('id_dificuldade_recebimento')->nullable();
			$table->string('email', 100);
			$table->string('telefone_pessoal', 20)->nullable();
			$table->string('nome_contato', 150);
			$table->string('contato_funcao', 150);
			$table->string('contato_celular', 20)->nullable();
			$table->text('observacao', 65535)->nullable();
			$table->date('data_recibo_2_via');
			$table->string('nome_responsavel_recebimento', 150);
			$table->string('rg_cpf_recebimento', 20);
			$table->string('cargo_funcao_recebimento', 60);
			$table->time('hora_recebimento');
			$table->date('data_recebimento');
			$table->string('nome_testemunha1', 150)->nullable();
			$table->string('rg_cpf_testemunha1', 20)->nullable();
			$table->string('nome_testemunha2', 150)->nullable();
			$table->string('rg_cpf_testemunha2', 20)->nullable();
			$table->integer('status')->nullable()->default(1);
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
		Schema::drop('tb_termo_visita_fiscal');
	}

}
