<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name', 'city_id',
    ];

    public function addresses()
    {
        return $this->belongsTo('App\Address');
    }

    public function city()
    {
        return $this->hasOne('App\City');
    }

}
