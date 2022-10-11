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
        Schema::create('filesapppros', function (Blueprint $table) {
            $table->id();
            $table->binary('announce');
            $table->binary('formulaire');
            $table->binary('firstpick');
            $table->binary('projectfunds');
            $table->unsignedBigInteger('files_id')->nullable();
            $table->foreign('files_id')->references('id')->on('appel_projets')->onDelete('cascade');
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
        Schema::dropIfExists('filesapppros');
    }
};
