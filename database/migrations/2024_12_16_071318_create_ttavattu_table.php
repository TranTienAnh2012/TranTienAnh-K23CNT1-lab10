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
        Schema::create('ttavattu', function (Blueprint $table) {
            // $table->id(); // mặc định id là khóa chính
            $table->string('ttaMaVTu')->primary();
            $table->string('ttaTenVTu')->unique();
            $table->string('ttaDvTinh');
            $table->float('ttaPhanTram');
            // $table->timestamps(); tạo trường mặc định
            });
        

    }
     
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttavattu');
    }
};
