<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SistemAyari extends Model
{
    use HasFactory;

    protected $table = 'sistem_ayarları';
    protected $fillable = [
        'ayar_adi',
        'deger',
    ];
}
