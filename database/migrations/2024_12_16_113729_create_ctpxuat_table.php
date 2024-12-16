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
        Schema::create('ctpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ttaSoPx', 4);  // Mã phiếu xuất, khóa chính là kết hợp của `ttaSoPx` và `ttaMaVTu`
    $table->string('ttaMaVTu');     // Mã vật tư, khóa ngoại tham chiếu từ bảng `ttavattu`
    $table->integer('ttaSoLuong');  // Số lượng xuất (INTEGER)

    // Định nghĩa khóa chính kết hợp giữa `ttaSoPx` và `ttaMaVTu`
    $table->primary(['ttaSoPx', 'ttaMaVTu']);

    // Định nghĩa khóa ngoại tham chiếu đến bảng `ttapxuat`
    $table->foreign('ttaSoPx')->references('ttaSoPx')->on('ttapxuat')->onDelete('cascade');

    // Định nghĩa khóa ngoại tham chiếu đến bảng `ttavattu`
    $table->foreign('ttaMaVTu')->references('ttaMaVTu')->on('ttavattu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpxuat');
    }
};
