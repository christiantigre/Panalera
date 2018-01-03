<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_venta',25)->nullable();
            $table->string('fecha',15)->nullable();
            $table->string('cliente',191)->nullable();
            $table->string('cel_cli',25)->nullable();
            $table->string('ruc_cli',15)->nullable();
            $table->string('cc_cli',15)->nullable();
            $table->string('dir_cli',191)->nullable();
            $table->string('mail_cli',75)->nullable();
            $table->double('total',15,2)->nullable();
            $table->double('subtotal',15,2)->nullable();
            $table->double('iva_cero',15,2)->nullable();
            $table->double('iva_calculado',15,2)->nullable();
            $table->double('porcentaje_iva',15,2)->nullable();
            $table->string('can_items',10)->nullable();
            $table->string('vendedor',191)->nullable();
            $table->boolean('documento')->default(0)->nullable();
            $table->integer('id_cliente')->unsigned()->nullable();
            $table->integer('id_user')->unsigned()->nullable();
            $table->integer('id_iva')->unsigned()->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_iva')->references('id')->on('ivas');
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
        Schema::drop('ventas');
    }
}
