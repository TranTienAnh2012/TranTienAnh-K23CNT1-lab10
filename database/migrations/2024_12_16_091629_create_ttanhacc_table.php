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
        Schema::create('ttanhacc', function (Blueprint $table) {
            $table->string('ttaMaNCC')->primary();
            $table->string('ttaTenNCC');
            $table->string('ttaDiachi');
            $table->string('ttaDienthoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttanhacc');
    }
};
