<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->unsignedInteger('tutor_id');
            $table->foreign('tutor_id')->references('id')->on('tutors')->onDelete('cascade');

            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

            $table->unsignedInteger('productivity_score');
            $table->unsignedInteger('assiduity_score');
            $table->unsignedInteger('proactivity_score');

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
        Schema::dropIfExists('ratings');
    }
}
