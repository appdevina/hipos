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
        Schema::create('m_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('product_code')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->foreignId('product_category_id')->nullable();
            $table->foreignId('unit_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_products');
    }
};
