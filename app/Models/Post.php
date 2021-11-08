<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use TCG\Voyager\Traits\Translatable;


class Post extends Model
{
    use HasFactory, Translatable , Searchable;

    protected $table = 'posts';
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'cover_image',
        'introtext',
        'content',
        'user_id',
        'sort',
        'status',
        'featured',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function searchableAs()
    {
//        return config('scout.prefix');
        return 'posts-index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        unset($array['category_id']);
        unset($array['cover_image']);
        unset($array['user_id']);
        unset($array['sort']);
        unset($array['status']);
        unset($array['featured']);

        return $array;
    }
}
