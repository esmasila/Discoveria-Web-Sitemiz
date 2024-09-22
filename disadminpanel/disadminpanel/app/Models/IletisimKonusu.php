<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IletisimKonusu extends Model
{
    use HasFactory;

    protected $table = 'iletisim_konulari';

    protected $fillable = [
        'konu',
    ];
}
