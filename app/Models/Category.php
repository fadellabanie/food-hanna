<?php

namespace App\Models;

use App\Support\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, Translatable;
    protected $fillable = [
        'father',
        'name_en',
        'name_nl',
        'parent_id',
        'image',
    ];

    protected $translatedAttributes = [
        'name',
    ];
    public function scopeParent($query)
    {
        return $query->whereNull('parent_id');
    }
    public function scopeFather($query, $type)
    {
        return $query->where('father', $type);
    }
}
