<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class StokTakip extends Model
{
    use HasFactory;

    protected $table = 'stok_takip';
    protected $fillable = [
        'urun_id',
        'guncel_stok',
    ];

    public function urun()
    {
        return $this->belongsTo(Urun::class, 'urun_id');
    }
}
