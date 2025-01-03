<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ciftci extends Model
{
    use HasFactory;

    protected $table = 'ciftciler';
    protected $primaryKey = 'ciftci_id';
    protected $fillable = [
        'kullanici_id',
        'ciftlik_adi',
        'bolge_id',
        'urun_turu',
    ];

    public function kullanici()
    {
        return $this->belongsTo(Kullanici::class, 'kullanici_id');
    }

    public function bolge()
    {
        return $this->belongsTo(Bolge::class, 'bolge_id');
    }

}
