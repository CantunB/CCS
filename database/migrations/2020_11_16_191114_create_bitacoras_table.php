<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id')->index();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->unsignedBigInteger('semana_id')->index();
            $table->foreign('semana_id')->references('id')->on('semanas')->onDelete('cascade');
            $table->unsignedBigInteger('pago_id')->index();
            $table->foreign('pago_id')->references('id')->on('pagos')->onDelete('cascade');
            $table->unsignedBigInteger('grupo_id')->index();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->string('observacion')->nullable();
            $table->string('cobranza')->nullable();
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
        Schema::dropIfExists('bitacoras');
    }
}
