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
    {
        Schema::create('questions_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Cource_id');
            $table->foreign('Cource_id')->references('id')->on('cources');
            $table->unsignedBigInteger('Subject_id');
            $table->foreign('Subject_id')->references('id')->on('subject');
            $table->unsignedBigInteger('Chapter_id');
            $table->foreign('Chapter_id')->references('id')->on('chapters');
            $table->string('Difficulty_level');
            $table->string('Question_type');
            $table->string('Marks');
            $table->string('Negative_mark')->nullable();
           $table->string('Add_question');
           $table->string('Option_one')->nullable();
           $table->string('Option_two')->nullable();
           $table->string('Option_three')->nullable();
           $table->string('Option_four')->nullable();
           $table->string('Option_ones')->nullable();
           $table->string('Option_twos')->nullable();
           $table->string('Option_threes')->nullable();
           $table->string('Option_fours')->nullable();
           $table->string('Right_answer')->nullable();
           $table->string('optcheck_1')->nullable();
           $table->string('optcheck_2')->nullable();
           $table->string('optcheck_3')->nullable();
           $table->string('optcheck_4')->nullable();
           $table->string('Trues')->nullable();
           $table->string('Falses')->nullable();
           $table->string('Right_tf')->nullable();
           $table->string('subjective_answer')->nullable();
           $table->string('Explan')->nullable();
           $table->string('Files')->nullable();
           $table->string('author')->nullable();
           $table->string('status')->default('1');
           $table->string('allot_ids')->nullable();
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
        Schema::dropIfExists('questions_models');
    }
};
