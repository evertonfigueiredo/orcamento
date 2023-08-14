<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id(); // Coluna de ID auto-incremento
            $table->unsignedBigInteger('cliente_id'); // Coluna de chave estrangeira para clientes
            $table->decimal('valor_total', 10, 2); // Coluna para valor total do orçamento
            $table->timestamps(); // Colunas de timestamps (created_at e updated_at)
        });

        Schema::create('orcamento_produto', function (Blueprint $table) {
            $table->id(); // Coluna de ID auto-incremento
            $table->unsignedBigInteger('orcamento_id'); // Coluna de chave estrangeira para orçamentos
            $table->unsignedBigInteger('produto_id'); // Coluna de chave estrangeira para produtos
            $table->integer('quantidade'); // Coluna para quantidade de produtos
            $table->decimal('valor', 10, 2); // Coluna para valor do produto no orçamento
            $table->timestamps(); // Colunas de timestamps (created_at e updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamento_produto');
        Schema::dropIfExists('orcamentos');
    }
};
