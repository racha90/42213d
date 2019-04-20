<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'name', 'city', 'area', 'street', 'house', 'info',
    ];

    public function cities()
    {
        return $this->hasOne('App\City');
    }
}
