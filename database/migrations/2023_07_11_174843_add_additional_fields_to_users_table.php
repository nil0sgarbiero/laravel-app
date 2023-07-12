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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('username')->unique();
            $table->string('logixuser')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('sector')->nullable();
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('username');
            $table->dropColumn('logixuser');
            $table->dropColumn('birth_date');
            $table->dropColumn('sector');
            $table->dropColumn('photo');
        });
    }
};
