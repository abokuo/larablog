<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $table = 'categories';
    protected $fillable = [
        'parent_id',
        'name',
        'description',
        'slug',
        'status',
        'featured',
    ];

    public function parentCategory(){
        return $this->belongsTo('App\Models\Category');
    }

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

}
