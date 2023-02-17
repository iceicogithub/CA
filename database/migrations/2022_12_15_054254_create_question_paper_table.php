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
        Schema::create('question_paper', function (Blueprint $table) {
            $table->id();
            $table->string('question_papers_pdf')->nullable();
            $table->string('quefile')->nullable();
            $table->string('ansfile')->nullable();
            $table->string('google_link')->nullable();
            $table->unsignedBigInteger('cource_id')->nullable();
            $table->foreign('cource_id')->references('id')->on('cources');
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->foreign('subject_id')->references('id')->on('subject');
            $table->string('chapter_id')->nullable();
            $table->string('paper_Name');
            $table->string('status');
            $table->string('paper_Type');
            $table->string('question_ids')->nullable();
            $table->string('changed_mark')->nullable();
            $table->string('total_mark');
            $table->string('Duration');
            $table->string('changed_ques_nu')->nullable();
            $table->string('instruction')->nullable();
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
        Schema::dropIfExists('question_paper');
    }
};

