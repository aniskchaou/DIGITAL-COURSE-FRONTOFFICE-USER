<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topicTitle');
            $table->string('courseRequirements');
            $table->string('courseDescription');
            $table->string('category');
            $table->string('level');
            $table->string('language');
            $table->string('duration');
            $table->string('thumbnail');
            $table->string('isfree');
            $table->string('price');
            $table->string('discount');
            $table->string('featuredCourse');
            $table->string('previewVideo');
            $table->string('coverImage');
            $table->string('capacity');
            $table->string('startDate');
            $table->string('partnerInstructor');
            $table->string('downloadable');
            $table->string('section');
            $table->rememberToken();
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
        //
    }
}
