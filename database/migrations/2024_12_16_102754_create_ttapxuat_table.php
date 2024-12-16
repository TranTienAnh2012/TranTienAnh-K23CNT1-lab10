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
        Schema::create('ttapxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ttaSoPx', 4)->primary();  // Mã phiếu xuất
            $table->dateTime('ttaNgayXuat');  // Ngày xuất (DATETIME)
            $table->string('ttaTenKH', 100);  // Tên khách hàng (VARCHAR(100))
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttapxuat');
    }
};
