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
            $table->bigIncrements('id');
            $table->string('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('ingredients')->nullable();
            $table->longText('instructions')->nullable();
            $table->longText('usage')->nullable();
            $table->string('effect')->nullable();
            $table->string('interaction')->nullable();
            $table->string('indication')->nullable();
            $table->string('precaution')->nullable();
            $table->string('manufactured')->nullable();
            $table->longText('description')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
