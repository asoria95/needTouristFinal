<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelAfilliatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('afiliados', function (Blueprint $table) {
        $table->bigInteger('id_afiliado');
        $table->text('direccion');
        $table->integer('edad');
        $table->string('curriculum',100);
        $table->primary('id_afiliado');
        //$table->foreign('id_afiliado')->references('id_persona')->on('personas');
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
        Schema::dropIfExists('afiliados');
    }
}
