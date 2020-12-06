<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteSemanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_semanas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id')->index();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->unsignedBigInteger('semana_id')->index();
            $table->foreign('semana_id')->references('id')->on('semanas')->onDelete('cascade');
            $table->unsignedBigInteger('pagos_id')->index();
            $table->foreign('pagos_id')->references('id')->on('pagos')->onDelete('cascade');
            $table->string('mora')->default('0');
            $table->tinyInteger('status')->default('0');
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
        Schema::dropIfExists('cliente_semanas');
    }
}
