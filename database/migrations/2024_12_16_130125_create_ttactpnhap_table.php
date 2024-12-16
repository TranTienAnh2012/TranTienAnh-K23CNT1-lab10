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
        Schema::create('ttactpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
             // Cột khóa chính kép (ttaSoPn và ttaMavtu)
    $table->string('ttaSoPn');       // Tham chiếu ttaphieunhap (ttaSoPn)
    $table->string('ttaMavtu');      // Tham chiếu ttavattu (ttaMaVTu)

    // Các cột dữ liệu khác
    $table->integer('ttaSLNhap')->nullable(); // Số lượng nhập
    $table->float('ttaDGNhap')->nullable();   // Đơn giá nhập

    // Các cột tham chiếu khác
    $table->string('ttaVattu_Mavtu');      // Tham chiếu bổ sung cho mã vật tư
    $table->string('ttaPnhap_SoPn');       // Tham chiếu bổ sung cho mã phiếu nhập

    // Khóa chính tổng hợp
    $table->primary(['ttaSoPn', 'ttaMavtu']);

    // Khóa ngoại
    $table->foreign('ttaSoPn')->references('ttaSoPn')->on('ttaphieunhap'); // Liên kết ttaphieunhap
    $table->foreign('ttaMavtu')->references('ttaMaVTu')->on('ttavattu');   // Liên kết ttavattu
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttactpnhap');
    }
};
