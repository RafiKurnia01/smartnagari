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
        Schema::create('suratdomisilis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_client')->constrained('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_statussurat')->constrained('statussurats')->onUpdate('cascade')->onDelete('cascade');
            $table->string('namalengkap');
            $table->string('nik');
            $table->string('nokk');
            $table->string('alamatsekarang');
            $table->string('alamatpindah');
            $table->string('alasanpindah');
            $table->date('tanggalpindah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratdomisilis');
    }
};
