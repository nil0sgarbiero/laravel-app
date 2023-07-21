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
        Schema::create('pia_tip_item', function (Blueprint $table) {
            $table->id()->increments();
            $table->integer('cod_nivel')->length(2);
            $table->integer('cod_grupo')->length(2);
            $table->integer('cod_sub_grupo')->length(2);
            $table->integer('cod_tip_item')->length(2);
            $table->string('den_tip_item')->length(120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pia_tip_item');
    }
};
