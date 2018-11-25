<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('administradores', function (Blueprint $table) {
        $table->bigInteger('id_administrador');
        $table->string('cargo');
        $table->primary('id_administrador');
        //$table->foreign('id_administrador')->references('id_persona')->on('personas');
        $table->rememberToken();
        $table->timestamps();
        //$table->primary('id')
      });
  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administradores');
    }
}
