<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
    ];

    public function addresses()
    {
        return $this->belongsTo('App\Address');
    }

    public function areas()
    {
        return $this->belongsTo('App\Area');
    }
}
