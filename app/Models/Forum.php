<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clan;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'email',
        'instagram',
        'osnivac'
    ];

    public function clanovi()
    {
        return $this->hasMany(Clan::class);
    }
}
