<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UrunKategorisi extends Model
{
    use HasFactory;

    protected $table = 'urun_kategorileri';
    protected $primaryKey = 'kategori_id';
    protected $fillable = [
        'kategori_adi',
        'aciklama',
    ];
}
