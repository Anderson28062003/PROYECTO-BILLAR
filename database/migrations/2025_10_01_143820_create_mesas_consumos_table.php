<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('mesas_consumos', function (Blueprint $table) {
        $table->id('idmesaconsumo'); 
        $table->string('consumos');
        $table->enum('estado', ['disponible', 'ocupada', 'reservada'])->default('disponible');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas_consumos');
    }
};
