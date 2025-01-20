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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->integer("NIK");
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('No_n                                                                                                                                                                                                                                                                                                                                                mHp');
            $table->string('Jenis_Kelamin');
            $table->string('Hobi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
