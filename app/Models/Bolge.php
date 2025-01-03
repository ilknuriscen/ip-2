<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolge extends Model
{
    use HasFactory;

    protected $table = 'bolgeler';
    protected $primaryKey = 'bolge_id';
    protected $fillable = [

        'bolge_adi'
    ];
    public function ciftciler()
    {
        return $this->hasMany(Ciftci::class, 'bolge_id');
    }
}
