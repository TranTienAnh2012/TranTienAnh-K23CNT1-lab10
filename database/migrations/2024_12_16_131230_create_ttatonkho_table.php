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
        Schema::create('ttatonkho', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
              // Cột khóa chính kép
        $table->string('ttaNamThang');   // Năm Tháng (không giới hạn độ dài)
        $table->string('ttaMavtu');      // Mã vật tư (tham chiếu ttavattu)

        // Các cột dữ liệu khác
        $table->integer('ttaSLDau')->nullable();   // Số lượng đầu kỳ
        $table->integer('ttaTongSLN')->nullable(); // Tổng số lượng nhập
        $table->integer('ttaTongSLX')->nullable(); // Tổng số lượng xuất
        $table->integer('ttaSLCuoi')->nullable();  // Số lượng cuối kỳ

        // Khóa chính tổng hợp
        $table->primary(['ttaNamThang', 'ttaMavtu']);

        // Khóa ngoại
        $table->foreign('ttaMavtu')->references('ttaMaVTu')->on('ttavattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttatonkho');
    }
};
