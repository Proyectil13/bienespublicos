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
            $table->string('descripcion');
            $table->string('clasi_bien', 10);
            $table->string('marca', 45);
            $table->string('modelo',45);
            $table->string('serial',45);
            $table->string('color', 45);
            $table->decimal('costo_bs', $precision = 7, $scale = 6);
            $table->enum('estado', ['OPERATIVO', 'INOPERATIVO']);
            $table->string('responsable', 45);
            $table->integer('piso');
            $table->string('area', 45);    
            
            
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
