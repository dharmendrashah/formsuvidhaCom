<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class searchRecords extends Model
{
    protected $fillable = ["q", "user", "ip", "setup"];
}
