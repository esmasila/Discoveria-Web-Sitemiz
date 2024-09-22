<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IletisimBilgisi extends Model
{
    use HasFactory;

    protected $table = 'iletisim_bilgileri';

    protected $fillable = [
        'adres',
        'telefon1',
        'telefon2',
        'email1',
        'email2',
        'destek',
    ];
}
