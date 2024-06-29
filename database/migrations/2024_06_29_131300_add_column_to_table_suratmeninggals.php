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
        Schema::table('suratmeninggals', function (Blueprint $table) {
            $table->string('sebabmeninggal')->after('tanggalmeninggal');
            $table->string('namapelapor')->after('sebabmeninggal');
            $table->string('nikpelapor')->after('namapelapor');
            $table->string('hubunganpelapor')->after('nikpelapor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suratmeninggals', function (Blueprint $table) {
            //
        });
    }
};
