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
        Schema::create('suratmeninggals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_client')->constrained('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_statussurat')->constrained('statussurats')->onUpdate('cascade')->onDelete('cascade');
            $table->string('namalengkap');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->date('tanggalmeninggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmeninggals');
    }
};
