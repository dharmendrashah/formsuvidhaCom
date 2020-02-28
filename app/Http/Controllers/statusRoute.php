<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userState;
use DB;
use App\userCompletedSteps;
class statusRoute extends Controller
{
   //checking the user Status and toutiing them according to the plan
   public function index()
    {
        if(isset(\Auth::user()->id)){
            $status = userState::where('userID', \Auth::user()->id)->get('status');
            $jsonStatus = json_decode($status, true);
            $actualStatus = $jsonStatus['0']['status'];

            switch ($actualStatus){
                case 0:
                    flash('You are registered with us Plese fill the below links to continue')->success()->important();
                    return view('auth\userDetails\basic');
                break;
                case 1:
                    flash('Your basic information are successfully initiated. Please Add your Photos and Signature to continue')->success()->important();
                    return view('auth\userDetails\other');
                break;
                case 2:
                    $thishasToBeInserted = new userCompletedSteps([
                        'userID' => \Auth::user()->id
                    ]);
                    $thishasToBeInserted->save();
                    return redirect()->route('status.edit', ['userID' => \Auth::user()->id])->with('status', '3');
                break;
                case 3:
                   return redirect()->route('home')->with('message', 'Your data has been Successfully user Created');
                break;
                default:
                    return view('errors\others');
                break;
            }
        }else{
            return view('errors\others');
        }

    }

}
