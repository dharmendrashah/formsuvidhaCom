<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formController;
use DB;
class formControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //this will validate the data
        $this->validate($request, [
            'vacancy' => 'required|integer',
            'userID' => 'required|integer',
            'status' => 'required|integer'
            ]);

            //this will save the data
            $formRequest = new formController([
                'vacancy' => $request->get('vacancy'),
                'userID' => $request->get('userID'),
                'status' => $request->get('status')
            ]);

            $formRequest->save();
           // return redirect()->route('fillNow', ['vcancyId' => $request->get('vacancy'), 'userID' => $request->get('userID'), 'status' => $request->get('status')])->with('message', 'Congratulations, You are Now filling the form');
           return redirect()->route('dataInsert', ['vcancyId' => $request->get('vacancy'), 'userID' => $request->get('userID'), 'status' => $request->get('status')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($vacancyId, $userID, $status)
    {

        $retriveSteps = DB::table('completing_the_forms')->where(['userID' => \Auth::user()->id, 'vacancy' => $vacancyId])->get();
        $stepsWillArray = json_decode($retriveSteps);
        $stepsWillJson = $stepsWillArray[0]->stepsHasToClear;
        $stepsWillExplode = explode(',', $stepsWillJson);
        $thisStepIs = $stepsWillExplode[0];

        switch ($thisStepIs) {
            case 1:
                return view('data.localAddress', compact('vacancyId', 'thisStepIs'));
            break;
            case 2:
                return view('data.permanentAddress', compact('vacancyId', 'thisStepIs'));
            break;
            case 2:
                echo $thisStepIs;
            break;
            case 3:
                echo $thisStepIs;
            break;
            case 4:
                echo $thisStepIs;
            break;
            case 5:
                echo $thisStepIs;
            break;
            case 6:
                echo $thisStepIs;
            break;
            case 7:
                echo $thisStepIs;
            break;
            case 8:
                echo $thisStepIs;
            break;
            case 9:
                echo $thisStepIs;
            break;
            case 10:
                echo $thisStepIs;
            break;
            case 11:
                echo $thisStepIs;
            break;
            case 12:
                echo $thisStepIs;
            break;
            case 13:
                echo $thisStepIs;
            break;
            case 14:
                echo $thisStepIs;
            break;
            case 15:
                echo $thisStepIs;
            break;
            case 16:
                echo $thisStepIs;
            break;
            case 18:
                echo $thisStepIs;
            break;
            case 19:
                echo $thisStepIs;
            break;
            case 20:
                echo $thisStepIs;
            break;
            case 21:
                echo $thisStepIs;
            break;
            case 22:
                echo $thisStepIs;
            break;
            case 23:
                echo $thisStepIs;
            break;
            case 24:
                echo $thisStepIs;
            break;
            case 25:
                echo $thisStepIs;
            break;
            case 26:
                echo $thisStepIs;
            break;
            case 27:
                echo $thisStepIs;
            break;
            case 28:
                echo $thisStepIs;
            break;
            case 29:
                echo $thisStepIs;
            break;
            case 30:
                echo $thisStepIs;
            break;
            case 31:
                echo $thisStepIs;
            break;
            case 32:
                echo $thisStepIs;
            break;
            case 33:
                echo $thisStepIs;
            break;
            case 34:
                echo $thisStepIs;
            break;
            case 35:
                echo $thisStepIs;
            break;
            case 36:
                echo $thisStepIs;
            break;
            case 37:
                echo $thisStepIs;
            break;
            case 38:
                echo $thisStepIs;
            break;
            case 39:
                echo $thisStepIs;
            break;
            case 40:
                echo $thisStepIs;
            break;
            case 41:
                echo $thisStepIs;
            break;
            case 42:
                echo $thisStepIs;
            break;
            case 43:
                echo $thisStepIs;
            break;
            case 44:
                echo $thisStepIs;
            break;
            case 45:
                echo $thisStepIs;
            break;
            case 46:
                echo $thisStepIs;
            break;
            case 47:
                echo $thisStepIs;
            break;
            case 48:
                echo $thisStepIs;
            break;
            case 49:
                echo $thisStepIs;
            break;
            case 50:
                echo $thisStepIs;
            break;
            case 51:
                echo $thisStepIs;
            break;
            case 52:
                echo $thisStepIs;
            break;
            case 53:
                echo $thisStepIs;
            break;
            case 54:
                echo $thisStepIs;
            break;
            case 55:
                echo $thisStepIs;
            break;
            case 56:
                echo $thisStepIs;
            break;
            case 57:
                echo $thisStepIs;
            break;
            case 58:
                echo $thisStepIs;
            break;
            case 59:
                echo $thisStepIs;
            break;
            case 60:
                echo $thisStepIs;
            break;
            default:
               echo "All the steps has been cleared. The user has to redirect to the payment and Reciept page";
                break;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
