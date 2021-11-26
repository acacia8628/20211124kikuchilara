<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = [
        'share'
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
