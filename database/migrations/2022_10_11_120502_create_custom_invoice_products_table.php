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
        Schema::create('custom_invoice_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('custom_invoice_id');
            $table->foreignId('product_id');
            $table->integer('amount');
            $table->decimal('price_per_product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_invoice_products');
    }
};
