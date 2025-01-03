<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Iletisim extends Model
{
    use HasFactory;

    protected $table = 'iletisim';
    protected $primaryKey = 'iletisim_id';

    protected $fillable = [
        'kullanici_id',
        'konu',
        'mesaj',
        'gonderim_tarihi',
    ];

    public $timestamps = true;

    public function kullanici()
    {
        return $this->belongsTo(Kullanici::class, 'kullanici_id', 'iletisim_id');
    }
}
