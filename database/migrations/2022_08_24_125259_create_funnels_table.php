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
        Schema::create('funnels', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');

            /* Creamos un nuevo campo con el metodo
                encargado de la relacion *foreign* */
            $table->foreign('user_id')->references('id')->on('users');


            $table->string('funnel_nombre');
            $table->date('funnel_fecha_registro');
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
        Schema::dropIfExists('funnels');
    }
};
