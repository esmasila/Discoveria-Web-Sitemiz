<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IletisimFormu extends Model
{
    use HasFactory;

    protected $table = 'iletisim_formlari';

    protected $fillable = [
        'ad_soyad',
        'email',
        'konu',
        'mesaj',
    ];
}
