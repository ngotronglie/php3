<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Translation\Loader\IcuDatFileLoader;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product', 50);
            $table->string('image', 100)->nullable(); // set gia tri null
            $table->double('price', 10, 2); // phan truoc toi da 10 so , phan sau dau phay co 2 so
            $table->text('description');
            $table->boolean('status')->default(true);
            $table->timestamps();  // created_at, updated_at 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        
    }
};
