<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Urun extends Model
{
    use HasFactory;

    protected $table = 'urunler';
    protected $primaryKey = 'urun_id';
    protected $fillable = [
        'ciftci_id',
        'kategori_id',
        'urun_adi',
        'birim_fiyat',
        'stok_miktari',
        'birim',
        'aciklama',

    ];

    public function kategori()
    {
        return $this->belongsTo(UrunKategorisi::class, 'kategori_id');
    }

    public function ciftci()
    {
        return $this->belongsTo(Ciftci::class, 'ciftci_id');
    }

    public function kampanyalar()
    {
        return $this->hasMany(Kampanya::class, 'urun_id');
    }

    public function yorumlar()
    {
        return $this->hasMany(Yorum::class, 'urun_id');
    }

}
