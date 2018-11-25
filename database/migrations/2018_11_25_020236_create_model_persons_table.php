<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('personas', function (Blueprint $table) {
        $table->increments('id_persona');
        $table->string('nombre',70);
        $table->string('apellido',70);
        $table->string('email',100)->unique();
        $table->string('password');
        //$table->primary('id_persona');
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
        Schema::dropIfExists('personas');
    }
}
