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
        Schema::create('newscontents', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('location');
            $table->string('annee');
            $table->string('projet');
            $table->string('objectif');
            $table->string('benificier');
            $table->binary('pic',99999999);
            $table->binary('pic1',99999999)->nullable();
            $table->binary('pic2',99999999)->nullable();
            $table->binary('pic3',99999999)->nullable();
            $table->binary('pic4',99999999)->nullable();
            $table->unsignedBigInteger('news_id');
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
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
        Schema::dropIfExists('newscontents');
    }
};
