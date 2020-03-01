<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stepsControllerModel;
use DB;
class importantStepsController extends Controller
{
    public function index(){
        $checkUserisReisteredOrNot = DB::table('importantStepsController')->where(['userID' => \Auth::user()->id])->get();
        if(empty($checkUserisReisteredOrNot->userID)){
          $userStepsImportantData = new stepsControllerModel([
              'userID' => \Auth::user()->id,
              'totalSteps' => 4,
              'stepsCompleted' => 0
          ]);
          $userStepsImportantData->save();
          return redirect()->route('stepsControllerFollow');
        }else{
            return redirect()->route('stepsControllerFollow');
        }
    }

    public function checkUserStep(){
        $checkUsersteps = DB::table('importantStepsController')->where(['userID'=> \Auth::user()->id])->get();
        $decodeThisdatatoArray = \json_decode($checkUsersteps);
        $nowStepsCompleted = $decodeThisdatatoArray[0]->stepsCompleted;
        switch ($nowStepsCompleted) {
            case 0:
                return redirect()->route('stepsInportant');
            break;

            case 1:
                return redirect()->route('educationInformationUpdate');
            break;

            case 2:
                return redirect()->route('userUpdateRequest');
            break;
            default:
                echo 'internal error: 503';
                break;
        }
    }

    public function updateChekUserSteps($nextStep){
        DB::table('importantStepsController')->where(['userID' => \Auth::user()->id])->update([
            'stepsCompleted' => $nextStep
        ]);
        return redirect()->route('stepsControllerImportant');
    }
}
