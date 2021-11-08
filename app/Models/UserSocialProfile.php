<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocialProfile extends Model
{
    use HasFactory;

    protected $table = 'user_social_profiles';
    protected $fillable = [
        'user_id',
        'avatar',
        'profile',
        'email',
        'facebook',
        'instagram',
        'line',
        'twitter',
        'github',
        'linkedin',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
