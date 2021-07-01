<?php

namespace App\Models;

use App\Support\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'title_en',
        'title_nl',
        'description_nl',
        'description_en',
        'image',
    ];
    protected $translatedAttributes = [
        'title',
        'description'
    ];
/*
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }*/
}
