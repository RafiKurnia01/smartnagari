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
        Schema::create('surattanahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_client')->constrained('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_statussurat')->constrained('statussurats')->onDelete('cascade')->onUpdate('cascade');
            $table->string('namalengkap');
            $table->string('nik');
            $table->string('alamat');
            $table->string('nomor_sertifikat');
            $table->string('letak_tanah');
            $table->string('luas_tanah');
            $table->string('batas_tanah');
            $table->string('tujuanpenggunaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattanahs');
    }
};
