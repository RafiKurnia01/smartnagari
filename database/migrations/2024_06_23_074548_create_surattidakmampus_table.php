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
        Schema::create('surattidakmampus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_client')->constrained('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_statussurat')->constrained('statussurats')->onUpdate('cascade')->onDelete('cascade');
            $table->string('namalengkap');
            $table->string('nik');
            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('penghasilan');
            $table->string('jumlah_tanggungan');
            $table->string('keperluan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattidakmampus');
    }
};
