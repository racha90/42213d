<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = [
        'name', 'city_id',
    ];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

}
