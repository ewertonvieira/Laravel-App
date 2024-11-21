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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('valor');
            $table->text('descricao')->nullable();
            $table->date('data_validade');
            $table->boolean('ativo')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')
                 ->references('id')
                 ->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
