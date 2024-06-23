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
        Schema::create('suratnikahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_client')->constrained('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_statussurat')->constrained('statussurats')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tempatmenikah');
            $table->date('tanggalmenikah');
            $table->string('namalengkap');
            $table->string('nik');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('namapasangan');
            $table->string('nikpasangan');
            $table->date('tanggal_lahir_pasangan');
            $table->string('tempat_lahir_pasangan');
            $table->string('jenis_kelamin_pasangan');
            $table->string('agama_pasangan');
            $table->string('pekerjaan_pasangan');
            $table->string('alamat_pasangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratnikahs');
    }
};
