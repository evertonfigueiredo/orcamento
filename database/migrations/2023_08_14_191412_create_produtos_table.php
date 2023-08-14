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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Coluna de ID auto-incremento
            $table->string('nome'); // Coluna de nome
            $table->unsignedBigInteger('categoria_id'); // Coluna de chave estrangeira para categorias
            $table->unsignedBigInteger('cor_id'); // Coluna de chave estrangeira para cores
            $table->decimal('valor', 10, 2); // Coluna de valor (decimal com 10 dígitos e 2 casas decimais)
            $table->timestamps(); // Colunas de timestamps (created_at e updated_at)

            // Chaves estrangeiras
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('cor_id')->references('id')->on('cores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
