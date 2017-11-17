<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('id_estilista');
            $table->double('costo');
            $table->double('neto');
            $table->double('parte_estilista');
            $table->double('parte_local');
            $table->double('iva');
            $table->tinyInteger('id_metodo');
            $table->tinyInteger('id_cliente');
            $table->tinyInteger('id_concepto');
            $table->date('fecha');
            $table->integer('ano');
            $table->integer('mes');
            $table->integer('dia');
            $table->integer('semana');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
