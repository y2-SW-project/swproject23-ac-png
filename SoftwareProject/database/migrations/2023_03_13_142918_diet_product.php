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
    { {
            Schema::create('diet_product', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('diet_id');
                $table->unsignedBigInteger('product_id');

                $table->foreign('diet_id')->references('id')->on('diets')->onUpdate('cascade')->onDelete('restrict');
                $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('restrict');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diet_product');
    }
};
