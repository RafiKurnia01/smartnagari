<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proker;

class Pegawai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function proker(){
        return $this->hasMany(Proker::class, 'id_pegawai');
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
