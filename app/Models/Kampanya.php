<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kampanya extends Model
{
    use HasFactory;

    protected $fillable = [
        'urun_id',
        'kampanya_adi',
        'indirim_orani',
        'baslangic_tarihi',
        'bitis_tarihi',
    ];

    protected $table = 'kampanyalar';


    public function urun(): BelongsTo
    {
        return $this->belongsTo(Urun::class, 'urun_id');
    }

}
