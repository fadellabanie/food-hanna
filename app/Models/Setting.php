<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'mobile',
        'office',
        'email',
        'facebook',
        'twitter',
        'linkedin',
        'google_plus',
        'do_ghazal',
        'happy_cow_cheese',
        'dutso',
        'about_video',
        'about',
    ];
}
