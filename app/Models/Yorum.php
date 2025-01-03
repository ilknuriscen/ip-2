<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Yorum modelini şu şekilde güncelleyin
class Yorum extends Model
{
    use HasFactory;

    protected $fillable = [
        'urun_id',
        'kullanici_id',
        'yorum_metni',
        'puan'
    ];


    protected $table = 'yorumlar';

    public function urun()
    {
        return $this->belongsTo(Urun::class, 'urun_id');
    }

    public function kullanici()
    {
        return $this->belongsTo(Kullanici::class, 'kullanici_id');
    }
}
