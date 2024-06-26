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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('sale_price');
            $table->integer('old_price');
            $table->integer('quantity');
            // $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->string('description');
            $table->string('image');
            $table->string('slug')->unique();
            $table->string('size');
            // $table->string('color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
