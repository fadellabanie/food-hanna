<?php

namespace App\Models;

use App\Support\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'father',
        'category_id',
        'name_en',
        'name_nl',
        'description_nl',
        'description_en',
        'weight',
        'size',
        'image',
    ];
    protected $translatedAttributes = [
        'name',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}