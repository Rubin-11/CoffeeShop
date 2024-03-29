<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Продукты бренды
        Schema::create('products_brands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('brand_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products'); // Связь с продуктами
            $table->foreign('brand_id')->references('id')->on('brands'); // Связь с брендами
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products_brands');
    }
};
