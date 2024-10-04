<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienes', function (Blueprint $table) {
            
            $table->id();
            $table->integer('item');
            $table->string('descripcion')->nullable();
            $table->string('clasi_bien', 10)->nullable();
            $table->string('marca', 45)->nullable();
            $table->string('modelo',45)->nullable();
            $table->string('serial',45)->nullable();
            $table->string('color', 45)->nullable();
            $table->decimal('costo_bs', $precision = 7, $scale = 6)->nullable();
            $table->enum('estado', ['OPERATIVO', 'INOPERATIVO'])->nullable();
            $table->string('responsable', 45)->nullable();
            $table->integer('piso')->nullable();
            $table->string('area', 45)->nullable();    
            
            
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
        Schema::dropIfExists('bienes');
    }
}
