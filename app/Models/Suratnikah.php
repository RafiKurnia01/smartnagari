<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratnikah extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function statussurat()
    {
        return $this->belongsTo(Statussurat::class, 'id_statussurat');
    }
}
