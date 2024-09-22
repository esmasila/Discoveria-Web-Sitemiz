<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mekan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mekanlar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bolge_id',
        'kategori_id',
        'mekan_adi',
        'acilis_saati',
        'kapanis_saati',
        'aciklama',
        'kapak_resmi',
        'resimler',
        'yas_siniri',
        'ucret',
        'parent_id',
        'konum',
        'oy_verme',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'resimler' => 'array',
        'ucret' => 'decimal:2',
    ];

    /**
     * Get the bolge that owns the mekan.
     */
    public function bolge()
    {
        return $this->belongsTo(Bolge::class, 'bolge_id');
    }

    /**
     * Get the kategori that owns the mekan.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function ortalamaOyVerme()
    {
        return $this->avg('oy_verme');
    }
}
