<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EducationQualificationDetailsUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educationUpdateStore', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('userID');
            $table->text('boardName');
            $table->text('schoolName');
            $table->text('schoolAddress');
            $table->text('rollNumber');
            $table->text('totalMarks');
            $table->text('obtainedmarks');
            $table->text('passingYear');
            $table->text('tenMarksheetCopy');
            $table->text('senboardName')->nullable();
            $table->text('senschoolName')->nullable();
            $table->text('senschoolAddress')->nullable();
            $table->text('streamOfStudyInSecondaryEducation')->nullable();
            $table->text('twelfthClassStatus');
            $table->text('senrollNumber')->nullable();
            $table->text('sentotalMarks')->nullable();
            $table->text('senobtainedmarks')->nullable();
            $table->text('senpassingYear')->nullable();
            $table->text('twelfthMarksheetCopy')->nullable();
            $table->text('ugCollageName')->nullable();
            $table->text('ugUniversityName')->nullable();
            $table->text('streamOfStudyUg')->nullable();
            $table->text('ugCollageAddress')->nullable();
            $table->text('underGraduationStatus');
            $table->text('finalYearRollNumberUg')->nullable();
            $table->text('finalyearmarsksheetUG')->nullable();
            $table->text('ugFinalYearObtainedMarks')->nullable();
            $table->text('ugFinalMarksheet')->nullable();
            $table->text('pgCollageName')->nullable();
            $table->text('pgUniversityName')->nullable();
            $table->text('streamOfStudyPg')->nullable();
            $table->text('pgCollageAddress')->nullable();
            $table->text('postGraduationStatus');
            $table->text('finalYearRollNumberPg')->nullable();
            $table->text('finalyearmarsksheetPG')->nullable();
            $table->text('pgFinalYearObtainedMarks')->nullable();
            $table->text('pgFinalMarksheet')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educationUpdateStore');
    }
}
