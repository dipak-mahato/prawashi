<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
       public function category()
    {
        return $this->hasMany('App\Category','item_id');
    }
}
