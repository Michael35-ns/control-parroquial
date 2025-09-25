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
        Schema::create('comunidad', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parroquia_id')->constrained('parroquia')->onDelete('cascade');
            $table->string('nombre',100);
            $table->string('direccion',200)->nullable();

            $table->unique(['parroquia_id','nombre']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunidad');
    }
};
