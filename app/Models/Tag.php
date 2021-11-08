<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use HasFactory, Searchable;

    protected $table = 'tags';
    protected $fillable = [
        'name',
        'slug',
        'status',
        'featured',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts(){
        return $this->belongsToMany('App\Models\Post')->withTimestamps();;
    }

    public function searchableAs()
    {
        return 'tags-index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        unset($array['id']);
        unset($array['status']);
        unset($array['featured']);
        unset($array['created_at']);
        unset($array['updated_at']);

        return $array;
    }
}
