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
        Schema::table('ttanhacc', function (Blueprint $table) {
            $table->string('email')->nullable(); // Cột email có thể null
            $table->boolean('status')->default(0); // Cột status mặc định là 0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ttanhacc', function (Blueprint $table) {
            //
            $table->dropColumn(['email', 'status']);
        });
    }
};
