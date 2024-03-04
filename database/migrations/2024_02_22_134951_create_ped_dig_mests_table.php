<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ped_dig_mest', function (Blueprint $table) {
            $table->string('COD_EMPRESA',2)->nullable(false)->unique();
            $table->integer('NUM_PEDIDO')->length(6)->nullable(false)->unique();
            $table->primary(['COD_EMPRESA', 'NUM_PEDIDO']);
            $table->integer('COD_NAT_OPER')->length(10);
            $table->date('DAT_EMIS_REPRES');
            $table->string('COD_CLIENTE',15);
            $table->integer('COD_REPRES')->length(4);
            $table->string('IES_COMISSAO',1);
            $table->string('IES_FINALIDADE',1);
            $table->string('IES_PRECO',1);
            $table->integer('NUM_LIST_PRECO')->length(4);
            $table->integer('COD_CND_PGTO')->length(3);
            $table->decimal('PCT_DESC_FINANC', $precision = 4, $scale = 2);
            $table->string('NUM_PEDIDO_CLI',25);
            $table->string('NUM_PEDIDO_REPRES',10);
            $table->integer('IES_FRETE')->length(1);
            $table->integer('COD_REPRES_ADIC')->length(4);
            $table->string('COD_TRANSPOR',15);
            $table->string('COD_CONSIG',15);
            $table->string('IES_EMBAL_PADRAO',1);
            $table->integer('IES_TIP_ENTREGA')->length(1);
            $table->string('IES_ACEITE_FINAN',1);
            $table->string('IES_ACEITE_COMER',1);
            $table->date('DAT_PRAZO_ENTREGA');
            $table->decimal('PCT_COMISSAO', $precision = 4, $scale = 2);
            $table->string('IES_SIT_PEDIDO',1);
            $table->integer('COD_TIP_VENDA')->length(2);
            $table->integer('COD_MOEDA')->length(3)->nullable(false);
            $table->decimal('PCT_DESC_ADIC', $precision = 4, $scale = 2);
            $table->date('DAT_DIGITACAO')->nullable(false);
            $table->string('IES_SIT_INFORMACAO',1)->nullable(false);
            $table->string('NOM_USUARIO',8)->nullable(false);
            $table->decimal('PCT_FRETE', $precision = 4, $scale = 2)->nullable(false);
            $table->decimal('PCT_DESC_BRUTO', $precision = 9, $scale = 7)->nullable(false);
            $table->string('COD_TIP_CARTEIRA',2)->nullable(false);
            $table->integer('NUM_VERSAO_LISTA')->length(3)->nullable(false);
            $table->string('HORA_DIGITACAO',8);
            $table->string('DAT_LIBERACAO_FIN');
            $table->string('HORA_LIBERACAO_FIN',8);
            $table->string('DAT_LIBERACAO_COM');
            $table->string('HORA_LIBERACAO_COM',8);
            $table->string('COD_LOCAL_ESTOQ',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ped_dig_mest');
    }
};
