<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userCompletedSteps extends Model
{
    protected $fillable = ['userID','completedSteps',];
}
