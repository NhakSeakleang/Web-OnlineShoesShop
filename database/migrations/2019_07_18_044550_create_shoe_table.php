<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoe', function (Blueprint $table) {
            $table->bigIncrements('id');
         
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('grade_id')->unsigned();
            $table->text('detail')->nullable();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grade')->onDelete('cascade');
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
        Schema::dropIfExists('shoe');
        $table->dropForeign('category_id');
        $table->dropForeign('grade_id');
    }
}
