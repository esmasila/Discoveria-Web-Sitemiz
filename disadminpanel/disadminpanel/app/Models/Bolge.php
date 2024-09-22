<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolge extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bolgeler';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'bolge_adi',
        'durum',
        'konum_bilgileri',
        'aciklama',
        'kapak_resmi',
    ];

    /**
     * Get the parent region.
     */
    public function parent()
    {
        return $this->belongsTo(Bolge::class, 'parent_id');
    }

    /**
     * Get the child regions.
     */
    public function children()
    {
        return $this->hasMany(Bolge::class, 'parent_id');
    }
    public function mekanlar()
    {
        return $this->hasMany(Mekanlar::class, 'bolge_id');
    }
}
