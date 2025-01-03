<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Odeme extends Model
{
    use HasFactory;

    protected $table = 'odemeler';
    protected $fillable = [
        'siparis_id',
        'odeme_turu',
        'tutar',
    ];
    public function siparis()
    {
        return $this->belongsTo(Siparis::class, 'siparis_id');
    }
}
