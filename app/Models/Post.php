<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clan;

class Post extends Model
{
    use HasFactory;

    public function clan()
    {
        return $this->belongsTo(Clan::class);
    }
}
