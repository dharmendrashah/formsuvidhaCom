<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\userCompletedSteps;
use DB;
class formStepsControll extends Controller
{
    public function stepsInsert(){
        //this will insert data completed by the user
    }
    public function stepsGet($user){
        //this will get the previous steps completed by the user
    }
    public function stepsUpdate($clearedStep, $vacancyId, $user){

        //this will update the user data
        //echo "clearedStep = $clearedStep, vacancyId = $vacancyId, user = $user";
        // $clearedStep //this will show which step is now cleared

        $previousCleardStep = DB::table('user_completed_steps')->where(['userID' => \Auth::user()->id])->get('completedSteps');
        $completedStepsInArray = $previousCleardStep[0]->completedSteps; //this will get the total steps cleared by the user
        $stepsWillExplode = explode(',', $completedStepsInArray);
        $convertingStepsIntoArray = array($stepsWillExplode);
        $exactConvertingStepsIntoArray = $convertingStepsIntoArray[0];
        print_r($convertingStepsIntoArray);
        //now we will get the completing steps by this form
        $hasToCompleteTheForm = DB::table('vacancies')->where(['id' => $vacancyId])->get('informationRequire');
        $stephasToComplete = $hasToCompleteTheForm['0']->informationRequire;
        $completeExplode = explode(',',$stephasToComplete);
        $convertingCompleteToArray = array($completeExplode);
        $exactConvertingCompleteArray = $convertingCompleteToArray[0];
        print_r($convertingCompleteToArray);
        //now get the differrence between this array
       $hasToCompleteThis = array_diff($exactConvertingCompleteArray, $exactConvertingStepsIntoArray);
       print_r($hasToCompleteThis);

       
    }

}
