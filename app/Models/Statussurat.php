<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statussurat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function surattanah(){
        return $this->hasMany(Surattanah::class, 'id_statussurat');
    }

    public function suratsktm(){
        return $this->hasMany(Surattidakmampu::class, 'id_statussurat');
    }

    public function suratnikah(){
        return $this->hasMany(Suratnikah::class, 'id_statussurat');
    }

    public function suratpenghasilan(){
        return $this->hasMany(Suratpenghasilan::class, 'id_statussurat');
    }

    public function suratmeninggal(){
        return $this->hasMany(Suratmeninggal::class, 'id_statussurat');
    }

    public function suratdomisili(){
        return $this->hasMany(Suratdomisili::class, 'id_statussurat');
    }
}
