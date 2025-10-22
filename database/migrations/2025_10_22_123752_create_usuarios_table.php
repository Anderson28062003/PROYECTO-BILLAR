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
        Schema::create('usuarios', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('numerodocumento'); // FK a empleados
        $table->string('usuario');
        $table->string('contraseña');
        $table->enum('tipo', ['admin', 'usuario']);
        $table->timestamps();
        $table->foreign('numerodocumento')->references('numerodocumento')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
