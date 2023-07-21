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
        Schema::create('pia_nivel', function (Blueprint $table) {
            $table->id()->increments();
            $table->integer('cod_nivel')->length(2);
            $table->string('den_nivel')->length(120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pia_nivel');
    }
};
