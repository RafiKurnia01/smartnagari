<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function client(){
        return $this->hasMany(SuratTanah::class, 'id_client');
    }

    public function clientsktm(){
        return $this->hasMany(SuratTidakMampu::class, 'id_client');
    }

    public function clientsuratnikah(){
        return $this->hasMany(SuratNikah::class, 'id_client');
    }

    public function clientsuratpenghasilan(){
        return $this->hasMany(SuratPenghasilan::class, 'id_client');
    }

    public function clientsuratmeninggal(){
        return $this->hasMany(SuratMeninggal::class, 'id_client');
    }

    public function clientsuratdomisili(){
        return $this->hasMany(SuratDomisili::class, 'id_client');
    }
}
