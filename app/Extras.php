<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extras extends Model
{
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
}
