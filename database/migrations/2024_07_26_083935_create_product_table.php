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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id'); // id: int | unsigned | primary
            $table->string('name_product', 200);
            $table->float('price', 10, 2); //8.22
            $table->integer('view');
            $table->string('description', 500)->nullable;
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')
                ->references('category_id')->on('category')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
