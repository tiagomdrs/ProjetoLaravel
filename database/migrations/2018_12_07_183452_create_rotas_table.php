<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_motorista');
            $table->foreign('id_motorista')->references('id')->on('motoristas');
            $table->unsignedInteger('id_caminhao');
            $table->foreign('id_caminhao')->references('id')->on('caminhoes');
            $table->string('bairro');
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
        Schema::dropIfExists('rotas');
    }
}
