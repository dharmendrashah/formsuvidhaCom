<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stepsControllerModel extends Model
{
    protected $table = 'importantStepsController';
    protected $fillable = ['userID', 'totalSteps', 'stepsCompleted'];
}
