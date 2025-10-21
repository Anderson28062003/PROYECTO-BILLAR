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
        Schema::create('mesasventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ventas');
            $table->foreign('ventas')
                  ->references('id')->on('ventas');
            $table->dateTime('fechainicio')->default(now());
            $table->dateTime('fechafin')->default(now());  
            $table->decimal('total', 10, 2);
            $table->unsignedBigInteger('idmesa');
            $table->foreign('idmesa')
                  ->references('idmesa')->on('mesas');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesasventas');
    }
};
