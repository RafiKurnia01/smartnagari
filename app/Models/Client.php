<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guarded = ['id'];

    protected $hidden = ['password', 'remember_token'];

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
