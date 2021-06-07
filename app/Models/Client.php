<?php

namespace App\Models;

use App\Support\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'name',
        'position',
        'description_nl',
        'description_en',
        'image',
    ];
}
