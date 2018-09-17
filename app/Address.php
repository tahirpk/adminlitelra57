<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address1', 'country', 'city',
    ];

    protected $hidden = [
        'customer_id',
    ];
}
