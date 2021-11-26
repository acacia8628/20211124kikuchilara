<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'share_id',
    ];

    public function share()
    {
        return $this->belongsTo('App\Models\Share');
    }
}
