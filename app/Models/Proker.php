<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
