<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siparis extends Model
{
    use HasFactory;

    protected $table = 'siparisler';
    protected $fillable = [
        'kullanici_id',
        'toplam_tutar',
        'siparis_durumu',
    ];

    public function kullanici()
    {
        return $this->belongsTo(Kullanici::class, 'kullanici_id');
    }

    public function detaylar()
    {
        return $this->hasMany(SiparisDetay::class, 'siparis_id');
    }
}
