<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userDocumentsUpdateModel extends Model
{
    protected $table = 'userDetailDocumentsUpload';
    protected $fillable = ['userID', 'passPic', 'hindiSignature', 'englishSignature', 'leftThumbprint', 'rightThumbprint', 'aadharcardpic'];
}
