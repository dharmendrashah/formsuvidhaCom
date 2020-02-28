<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicDetail extends Model
{
    //
    protected $fillable = [ 'userID', 'Number', 'addOne', 'addTwo', 'cityVilage', 'district', 'state', 'pinCode', 'eduQualificaton', 'otherQualification'];
}
