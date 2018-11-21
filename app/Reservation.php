<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'number_of_days', 'total_price', 'start_date',
        'end_date', 'start_location','end_location'
    ];
    public function extras()
    {
        return $this->hasMany('App\Extras');
    }
}
