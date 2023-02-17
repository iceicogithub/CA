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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('subject_id');
            $table->string('paper_alloted'); 
            $table->string('product_name');   
            $table->string('product_price');
            $table->string('description')->nullable();
            $table->string('product_image')->nullable();
            $table->string('pack_details')->nullable();
            $table->string('exam')->nullable();
            $table->string('date')->nullable();
            $table->string('format')->nullable();
            $table->string('test_langauge')->nullable();
            $table->string('test_assecc')->nullable();
            $table->string('sol_available')->nullable();
            $table->string('rpt_available')->nullable();
            $table->string('status');
           
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
};
