<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->unsignedInteger('rating_id');
            $table->foreign('rating_id')->references('id')->on('ratings')->onDelete('cascade');
            
            $table->unsignedInteger('rating_item_id');
            $table->foreign('rating_item_id')->references('id')->on('rating_items')->onDelete('cascade');
            
            $table->unsignedInteger('score');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating_items');
    }
}
