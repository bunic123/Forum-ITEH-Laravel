<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forum;
use App\Models\Post;

class Clan extends Model
{
    use HasFactory;

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function postovi()
    {
        return $this->hasMany(Post::class);
    }
}
