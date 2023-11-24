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
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pedido_id')->unsigned(); // Somente números inteiros positivos
            $table->bigInteger('produto_id')->unsigned(); // Somente números inteiros positivos
            $table->bigInteger('cupom_id')->nullable()->unsigned(); // Somente números inteiros positivos
 
            $table->enum('status', ['RE', 'PA', 'CA' ]); //Reservado, Pago, Cancelado
            $table->decimal('valor', 6, 2)->default(0);
            $table->decimal('desconto', 6, 2)->default(0);
            $table->timestamps();
           
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('cupom_id')->references('id')->on('cupoms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_produtos');
    }
};
