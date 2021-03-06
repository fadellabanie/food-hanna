<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
