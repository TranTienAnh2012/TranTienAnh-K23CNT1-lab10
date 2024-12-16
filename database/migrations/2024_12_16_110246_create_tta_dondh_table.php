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
        Schema::create('tta_dondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->char('ttaSoDH', 4); // Mã đơn hàng, khóa chính
            $table->dateTime('ttaNgayDH'); // Ngày đơn hàng
            $table->string('ttaMaNCC'); // Thay đổi thành string cho phù hợp với bảng ttanhacc
            $table->char('ttanhacc_MaNCC', 3); // Khóa ngoại tham chiếu nhà cung cấp

            // Định nghĩa khóa chính
            $table->primary('ttaSoDH');
            
            // Định nghĩa khóa ngoại
            $table->foreign('ttaMaNCC')->references('ttaMaNCC')->on('ttanhacc')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tta_dondh');
    }
};
