<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function todolist()
  {
    return $this->belongsTo('App\Film');
  }
}
