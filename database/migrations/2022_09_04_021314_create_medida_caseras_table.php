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
        Schema::create('medida_caseras', function (Blueprint $table) {
            $table->id();
            $table->string('NombreSingular');
            $table->string('NombrePlurar');
            $table->float('GramosTotales', 8, 2);
            $table->float('PorcentajeComestible', 8, 2);
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
        Schema::dropIfExists('medida_caseras');
    }
};
