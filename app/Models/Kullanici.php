<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Kullanici extends Model
{
    use HasFactory;

    protected $table = 'kullanicilar';
    protected $primaryKey = 'kullanici_id';
    protected $fillable = [
        'ad_soyad',
        'email',
        'telefon',
        'sifre',
        'rol_id',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    public function yorumlar()
    {
        return $this->hasMany(Yorum::class, 'kullanici_id');
    }

    public function adresler()
    {
        return $this->hasMany(TeslimatAdresi::class, 'kullanici_id');
    }
}
