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
        Schema::create('chat_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trabajador_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('cliente_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_models');
    }
};