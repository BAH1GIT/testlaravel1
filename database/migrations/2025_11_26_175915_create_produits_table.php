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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('product_title',255);
            $table->string('product_description');
            $table->string('product_keywords',100);
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');
            $table->string('product_image1')->nullable();
            $table->string('product_image2')->nullable();
            $table->string('product_image3')->nullable();
            $table->decimal('product_price',10,2)->default(0);
            $table->enum('product_status', ['dispo', 'faible', 'en rupture'])->default('dispo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
