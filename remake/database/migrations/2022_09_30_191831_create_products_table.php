<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description', 255)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('reference_link')->nullable();
            $table->integer('user_id');
            $table->integer('min_price')->nullable();
            $table->integer('max_price')->nullable();
            $table->timestamp('publish_at');
            $table->integer('quantity')->default(1);
            $table->tinyInteger('isNew')->nullable();
            $table->tinyInteger('isNegotiable')->nullable();
            $table->tinyInteger('isActive')->default(1);
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
        Schema::dropIfExists('products');
    }
}
