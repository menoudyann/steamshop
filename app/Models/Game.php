<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $fillable = ['name', 'description', 'price', 'released_at'];

    /**
     * This function returns a collection of users that belong to the game.
     * 
     * @return A collection of users that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function buy(User $user)
    {
        if ($user->balance >= $this->price && $user->games()->find($this->id) == false) {
            $user->balance = $user->balance - $this->price;
            $user->save();
            $this->users()->syncWithoutDetaching($user->id, false);
            return true;
        } else {
            return false;
        }
    }
}
