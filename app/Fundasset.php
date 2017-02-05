<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fundasset extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'description',
        'asset_value',
        'asset_date',
        'interest',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');

    }


}
