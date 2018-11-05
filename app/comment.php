<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public function todolist()
  {
    return $this->belongsTo('App\film');
  }
}
