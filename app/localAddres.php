<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localAddres extends Model
{
    protected $fillable = ['userID', 'localAddOne', 'localAddTwo', 'localCityVillage', 'district', 'state', 'pinZipCode', 'country'];
}
