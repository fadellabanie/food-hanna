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
        'parent_id',
        'child_id',
        'sub_child_id',
        'name_en',
        'name_nl',
        'image',
    ];

    protected $translatedAttributes = [
        'name',
    ];
    public function scopeParent($query)
    {
        return $query->where('parent_id', 0);
    }
    
    public function scopeFather($query, $type)
    {
        return $query->where('father', $type);
    }

      public function scopeSubChild($query)
    {
        return $query->where('sub_child_id','!=',0);
    }
      public function scopeOnlyParent($query)
    {
        return $query->where('child_id',0)->where('sub_child_id',0);
    } 
    public function scopeOnlyChild($query)
    {
        return $query->where('child_id','!=',0)->where('sub_child_id',0);
    } 
     public function scopeOnlySubChild($query)
    {
        return $query->where('sub_child_id',0);
    }

    public function mainFather()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
    public function mainChild()
    {
        return $this->belongsTo(Category::class, 'child_id', 'id');
    }
    public function mainSubChild()
    {
        return $this->belongsTo(Category::class, 'sub_child_id', 'id');
    }

    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
