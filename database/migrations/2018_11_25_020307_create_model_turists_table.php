<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelTuristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('turistas', function (Blueprint $table) {
        $table->bigInteger('id_turista');
        $table->string('idioma',30);
        $table->string('residencia');
        $table->primary('id_turista');
        //$table->foreign('id_turista')->references('id_persona')->on('personas');
        //$table->rememberToken();
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
        Schema::dropIfExists('turistas');
    }
}
