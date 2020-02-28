<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\completingTheForm;
use DB;
class vacancyDocuments extends Controller
{
    public function getDataInsert($vacancyId, $userID, $status){
        //insert the data into completing_the_forms table
                //now get the total steps has to follow for this form
        /*
        start
        */
        $retriveParcels = DB::table('vacancies')->where(['id' => $vacancyId])->get();//to get the total step form the vacancy
        $thisJson = json_decode($retriveParcels);
        $thisParcel = $thisJson['0']->informationRequire;
        $thisWill = explode(',', $thisParcel);
        // $thisWillArray = array($thisWill);
        // $theFormHasToFollowArray = $thisWill;
        //print_r($thisWill);//this will get the total number of steps
        /*
        start
        _______________________________________________________________________________________________________________________
        */
        //now get the total steps has to follow for this form
        /*
        start
        */
       $retriveSteps = DB::table('user_completed_steps')->where(['userID' => \Auth::user()->id])->get();//to get the total steps completed by the user
       $stepsJson = json_decode($retriveSteps);
       $stepsParcel = $stepsJson[0]->completedSteps;
       $stepsWill = explode(',', $stepsParcel);
    //    $stepsWillArray = array($stepsWill);
    //    $theStepsCompletedByUser = $stepsWillArray[0];
       //print_r($stepsWill);//this will show the total array has been completed by the user
        /*
        end
        __________________________________________________________________________________________________________________________
        */
        //now will get the differrence between the two array
        /*
        start
        */
        $steps = array_diff($thisWill,$stepsWill);
        //print_r($steps);
        /*
        end
        */
        //array to string conversion
        $stepsWillString = implode(",",$steps);

        $insertIntoDB = new completingTheForm([
            'session' => 'fsfbssdfsjsf-sdfsdjff-fsbfsdf-sdfbsf-dsfsjfbssf-ssfgbsfffsfdncasfhrfeuiriohfsndfdf-fsfsdfbjsdbsdfscssf-sdfsda',
            'ip' => $_SERVER['REMOTE_ADDR'],
            'userID' => \Auth::user()->id,
            'stepsHasToClear' => $stepsWillString,
            'vacancy' => $vacancyId
        ]);
        //    print_r($insertIntoDB);
        $insertIntoDB->save();
        return redirect()->route('fillNow', ['vcancyId' => $vacancyId, 'userID' => \Auth::user()->id, 'status' => 'jklsdfjklsdfjklfjkldfsdgjklf'])->with('message', 'Complete the Following steps to Fill the form');


    }
}
