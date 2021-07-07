<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'status',
    ];

    public function scopeHome($query)
    {
        return $query->where('location', 'home');
    }
     public function scopeProduct($query)
    {
        return $query->where('location', 'products');
    }


    public function images()
    {
        return $this->hasMany(BannerImage::class, 'banner_id');
    }
}
