<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    //
        /**
     * Get the comments of the film.
     */
    public function comments()
    {
        return $this->hasMany('App\comment');
    }
}
