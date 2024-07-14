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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('name_san_pham');
            $table->string('image_san_pham')->nullable();
            $table->unsignedInteger('quantity_san_pham');
            $table->double('price_san_pham' , 10 ,2);
            $table->text('description_san_pham')->nullable();
            $table->unsignedBigInteger('danh_muc_id');

            // create foreign key
            $table->foreign('danh_muc_id')->references('id')->on('danh_muc')->onDelete('cascade');

            /**
             *     foreign : dinh nghia 1 khoa ngoai
             *     references : doi chieu voi id ben bang danh muc voi foreign key (xac dinh cot ma khoa ngoai tham chieu )
             *     on: nam trong bang danh muc (xac dinh bang duoc tham chieu toi)
             *     onDelete : xoa bang san pham khi xoa bang danh muc
             * 
             */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
    }
};
