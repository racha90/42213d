<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name',
    ];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function areas()
    {
        return $this->hasMany('App\Area');
    }
}
