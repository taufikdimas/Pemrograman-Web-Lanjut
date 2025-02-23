<?php

use Illuminate\Database\Migrations\Migration; //import class Migration dari framework Laravel untuk membuat file migrasi.
use Illuminate\Database\Schema\Blueprint;     //import class Blueprint untuk menentukan struktur tabel database.
use Illuminate\Support\Facades\Schema;
//import class Schema yang menyediakan method untuk crud tabel dalam database.

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void//function ketika migrasi dijalankan, unuk membuat tabel items
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items'); //function ketika migrasi di-rollback, untuk menghapus tabel items.
    }
};
