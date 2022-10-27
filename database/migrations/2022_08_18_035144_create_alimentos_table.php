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
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('Name');

            $table->float('Energia', 8, 2)->nullable();
            $table->float('Energia2', 8, 2)->nullable();
            $table->float('Agua', 8, 2)->nullable();
            $table->float('ProteinaTotal', 8, 2)->nullable();
            $table->float('ProteinaVegetal', 8, 2)->nullable();
            $table->float('ProteinaAnimal', 8, 2)->nullable();
            $table->float('GrasaTotal', 8, 2)->nullable();
            $table->float('CarbohidratosTotales', 8, 2)->nullable();
            $table->float('CarbohidratosDisponibles', 8, 2)->nullable();
            $table->float('FibraDietaria', 8, 2)->nullable();
            $table->float('Cenizas', 8, 2)->nullable();
            $table->float('Calcio', 8, 2)->nullable();
            $table->float('Fosforo', 8, 2)->nullable();
            $table->float('Zinc', 8, 2)->nullable();
            $table->float('Hierro', 8, 2)->nullable();
            $table->float('B_caroteno', 8, 2)->nullable();
            $table->float('VitaminaA', 8, 2)->nullable();
            $table->float('Tiamina', 8, 2)->nullable();
            $table->float('Riboflavina', 8, 2)->nullable();
            $table->float('Niacina', 8, 2)->nullable();
            $table->float('VitaminaC', 8, 2)->nullable();
            $table->float('AcidoFolico', 8, 2)->nullable();
            $table->float('Sodio', 8, 2)->nullable();
            $table->float('Potasio', 8, 2)->nullable();
            $table->float('VitaminaB12', 8, 2)->nullable();
            $table->float('VitaminaD', 8, 2)->nullable();
            $table->integer('cantidad')->nullable();
            $table->enum('unidadMedida', ['Mg', 'g','Kg'])->nullable();
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
        Schema::dropIfExists('alimentos');
    }
};
