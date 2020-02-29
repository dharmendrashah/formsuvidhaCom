<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BauserInformation extends Model
{
    protected $table = ['userFinalInformation'];
    protected $fillable = ['fullname', 'fatherName', 'Mothername', 'dobdate', 'dobmonth', 'dobYear', 'caste', 'casteCertificateIs', 'emailAddress', 'gender', 'handiCappedStatus', 'nationality', 'state', 'district', 'Block', 'tahsil', 'village', 'maritalStatus', 'spouseName', 'children'];
}
