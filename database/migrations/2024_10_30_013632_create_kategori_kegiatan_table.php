<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kategori_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->timestamps();
        });

        DB::table('kategori_kegiatan')->insert([
            ['nama_kategori' => 'Kajian'],
            ['nama_kategori' => 'Pelatihan'],
            ['nama_kategori' => 'Sosial'],
            ['nama_kategori' => 'Kompetisi']
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('kategori_kegiatan');
    }
};
