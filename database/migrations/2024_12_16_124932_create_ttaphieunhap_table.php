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
        Schema::create('ttaphieunhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ttaSoPn');         // Mã phiếu nhập
            $table->dateTime('ttaNgayNhap');  // Ngày phiếu nhập
            $table->string('soDH');           // Mã đơn hàng (không phải khóa ngoại)
        
            // Định nghĩa khóa chính
            $table->primary('ttaSoPn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttaphieunhap');
    }
};
