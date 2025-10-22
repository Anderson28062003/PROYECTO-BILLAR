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
    Schema::create('ventas', function (Blueprint $table) {
        $table->id(); 
        $table->datetime('fecha');
        $table->unsignedBigInteger('numerodocumento');
        $table->foreign('numerodocumento')
              ->references('numerodocumento')->on('empleados');

        $table->unsignedBigInteger('idmesaconsumo');
        $table->foreign('idmesaconsumo')
              ->references('idmesaconsumo')->on('mesas_consumos');
        $table->decimal('total', 10, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
