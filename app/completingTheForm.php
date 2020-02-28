<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class completingTheForm extends Model
{
    protected $fillable = ['session', 'ip', 'userID', 'stepsHasToClear', 'vacancy'];
}
