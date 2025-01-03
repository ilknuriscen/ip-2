<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeslimatAdresi extends Model
{
    use HasFactory;

    protected $table = 'teslimat_adresleri';
    protected $fillable = [
        'kullanici_id',
        'adres',
        'sehir',
        'posta_kodu',
    ];
    public function kullanici()
    {
        return $this->belongsTo(Kullanici::class, 'kullanici_id');
    }
}
