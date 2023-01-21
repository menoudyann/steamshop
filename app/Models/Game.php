<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $fillable = ['name', 'description', 'price', 'released_at'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
