<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shoe_id')->unsigned();
            $table->bigInteger('images_id')->unsigned();
            $table->bigInteger('color_id')->unsigned();
            $table->bigInteger('size_id')->unsigned();
            $table->bigInteger('price_id')->unsigned();
            $table->bigInteger('discount_id')->unsigned();
            $table->bigInteger('stock_id')->unsigned();
            $table->text('detail')->nullable();
            $table->foreign('shoe_id')->references('id')->on('shoe')->onDelete('cascade');
            $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('color')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('size')->onDelete('cascade');
            $table->foreign('price_id')->references('id')->on('price')->onDelete('cascade');
            $table->foreign('discount_id')->references('id')->on('discount')->onDelete('cascade');
            $table->foreign('stock_id')->references('id')->on('stock')->onDelete('cascade');
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
        Schema::dropIfExists('shoe_detail');
    }
}
