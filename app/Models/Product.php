<?php

namespace App\Models;

use App\Support\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'parent_id',
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
}