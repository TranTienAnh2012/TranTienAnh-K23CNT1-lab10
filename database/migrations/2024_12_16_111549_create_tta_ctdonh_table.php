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
        Schema::create('tta_ctdonh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
             // Khóa chính của bảng ctdondh
             $table->char('ttaSoDH');  // Mã đơn hàng (Khóa ngoại từ bảng `tta_dondh`)
             $table->string('ttaMaVTu'); // Mã vật tư (Khóa ngoại từ bảng `ttavattu`)
             $table->integer('ttaSIdat'); // Số lượng đặt
 
             // Định nghĩa khóa chính cho bảng ctdondh (kết hợp từ `ttaSoDH` và `ttaMaVTu`)
             $table->primary(['ttaSoDH', 'ttaMaVTu']);
 
             // Khóa ngoại tham chiếu đến bảng `ttadondh`
             $table->foreign('ttaSoDH')->references('ttaSoDH')->on('tta_dondh')->onDelete('cascade');
             
             // Khóa ngoại tham chiếu đến bảng `ttavattu`
             $table->foreign('ttaMaVTu')->references('ttaMaVTu')->on('ttavattu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tta_ctdonh');
    }
};
