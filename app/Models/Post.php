<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'status_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
