<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'house_number', 'premise', 'road',
        'area', 'city', 'pin',
        'state_id', 'aadhar_registration_id', 'district',
        'is_office_address_same'
    ];
}
