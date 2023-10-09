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
        Schema::create('iletisim', function (Blueprint $table) {
            $table->id();
            $table->string("ip");
            $table->string("adi");
            $table->string("email");
            $table->string("tel");
            $table->string("konu");
            $table->text("icerik");
            $table->enum("okundu",["Okundu","Yeni"])->default("Yeni");
            $table->text("cvp")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iletisim');
    }
};
