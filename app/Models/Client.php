<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $guarded = ['id'];


    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

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
