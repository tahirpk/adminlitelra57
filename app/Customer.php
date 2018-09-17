<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'party_type', 'surname','first_name','last_name','middle_name','allias','contact_type','phone','email','country','address',
    ];

}
