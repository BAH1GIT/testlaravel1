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
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constraine('produits')->ondelete('cascade');
            $table->foreignId('vendeur_id')->constraine('vendeurs')->ondelete('cascade');
            $table->foreignId('client_id')->constraine('clients')->ondelete('cascade');
            $table->integer('quantite')->default(1);
            $table->decimal('prix_total',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventes');
    }
};
