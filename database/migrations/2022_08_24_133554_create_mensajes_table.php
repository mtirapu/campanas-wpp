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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();

            /* Definimos que este campo sea *unsigned*
            esto quiere decir que no va a tener signo,
            por ende va a ser un campo positivo y, a su vez, acepte un tipo de dato entero*/
            $table->unsignedBigInteger('funnel_id');

            $table->unsignedBigInteger('user_id');

            /* Creamos un nuevo campo con el metodo
                encargado de la relacion *foreign* */
            $table->foreign('funnel_id')->references('id')->on('funnels');

            $table->foreign('user_id')->references('id')->on('users');

            $table->text('mensaje_cuerpo');
            $table->unsignedBigInteger('mensaje_dias_act');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
};
