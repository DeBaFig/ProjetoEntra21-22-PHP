<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('title')->unique();
            $table->string('description', 255)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('reference_link');
            $table->integer('min_price');
            $table->integer('max_price');
            $table->timestamp('publish_at');
            $table->integer('quantity');
            $table->enum('new', ["Novo","Usado"]);
            $table->boolean('negociate');
            $table->enum('status', ["Ativo","Exclu\u00eddo","Pausado"])->default('ativo');
            $table->enum('purpose', ["comprar","alugar"]);
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
        Schema::dropIfExists('items');
    }
}
