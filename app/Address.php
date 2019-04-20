<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'name', 'city_id', 'area_id', 'street', 'house', 'info'
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }
}
