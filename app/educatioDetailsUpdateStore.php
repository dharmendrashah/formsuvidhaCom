<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class educatioDetailsUpdateStore extends Model
{
    protected $table = 'educationUpdateStore';
    protected $fillable = ['userID', 'boardName', 'schoolName', 'schoolAddress', 'rollNumber', 'totalMarks', 'obtainedmarks', 'passingYear', 'tenMarksheetCopy', 'senboardName', 'senschoolName', 'senschoolAddress', 'streamOfStudyInSecondaryEducation', 'twelfthClassStatus', 'senrollNumber', 'sentotalMarks', 'senobtainedmarks', 'senpassingYear', 'twelfthMarksheetCopy', 'ugCollageName', 'ugUniversityName', 'streamOfStudyUg', 'ugCollageAddress', 'underGraduationStatus', 'finalYearRollNumberUg', 'finalyearmarsksheetUG', 'ugFinalYearObtainedMarks', 'ugFinalMarksheet', 'pgCollageName', 'pgUniversityName', 'streamOfStudyPg', 'pgCollageAddress', 'postGraduationStatus', 'finalYearRollNumberPg', 'finalyearmarsksheetPG', 'pgFinalYearObtainedMarks', 'pgFinalMarksheet'];
}
