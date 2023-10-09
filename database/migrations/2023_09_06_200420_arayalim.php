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
        Schema::create('arayalim', function (Blueprint $table) {
            $table->id();
            $table->string("adi");
            $table->string("telefon");
            $table->enum("arandimi",["Evet","Hayır"])->default("Hayır");
            $table->enum("tekrar",["Evet","Hayır"]);
            $table->string("tekrar_tarih")->nullable();
            $table->text("notlar")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arayalim');
    }
};
