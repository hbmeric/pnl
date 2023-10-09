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
        Schema::create('basaranlar', function (Blueprint $table) {
            $table->id();
            $table->string("adi");
            $table->string('okul');
            $table->integer("puan");
            $table->integer('siralama');
            $table->boolean('aktif');
            $table->string("photo");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basaranlar');
    }
};
