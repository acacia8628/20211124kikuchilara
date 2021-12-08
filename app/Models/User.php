<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = array('id');

    protected $fillable = [
        'name',
        'uid',
    ];

    public function Shares()
    {
        return $this->hasMany('App\Models\Share');
    }

    public function Comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function Likes()
    {
        return $this->hasMany('App\Models\Like');
    }
}
