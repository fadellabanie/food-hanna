<?php

namespace App\Models;

use App\Support\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory,Translatable;
    protected $fillable = [
        'question_en',
        'question_nl',
        'answer_nl',
        'answer_en',
    ];
    protected $translatedAttributes = [
        'answer',
        'question'
    ];
}
