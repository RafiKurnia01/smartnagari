<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisdatapenduduk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function penduduk(){
        return $this->hasMany(Penduduk::class, 'id_jenisdata');
    }
}
