<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BasicDetail;
use User;
use DB;
class userBasicDetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                    return view('errors\others');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'userID' => 'required',
            'Number' => 'required|max:12',
            'addOne' => 'required',
            'district' => 'required',
            'State' => 'required',
            'pinCode' => 'required|max:6',
            'eduQualificaton' => 'required'
        ]);

        $userBasicData = new BasicDetail([
            'userID' => $request->get('userID'),
            'Number' => $request->get('Number'),
            'addOne' => $request->get('addOne'),
            'addTwo' => $request->get('addTwo'),
            'cityVilage' => $request->get('cityVilage'),
            'district' => $request->get('district'),
            'state' => $request->get('State'),
            'pinCode' => $request->get('pinCode'),
            'eduQualificaton' => $request->get('eduQualificaton'),
            'otherQualification' => $request->get('otherQualification')
        ]);
        $userBasicData->save();
        return redirect()->route('status.edit',['userID' => $request->get('userID')])->with('status', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                    return view('errors\others');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                    return view('errors\others');

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
        $thisID = BasicDetail::find($id);
       // print_r($thisID);
      // dd($thisID);
       $this->validate($request, [
        'name' => 'required|string|max:40|min:2',
        'email' => 'required|max:50|min:5|email',
        'mobNumber' => 'required|min:10|max:12',
        'eduQualificaton' => 'required|max:100',
        'otherQualification' => 'min:0|max:100',
        'addOne' => 'required|min:2|max:40',
        'addTwo' => 'min:0|max:40',
        'cityVilage' => 'sometimes|min:2|max:20',
        'district' => 'required|min:2|max:20',
        'state' => 'required|min:2|max:20',
        'pinCode' => 'required|min:5|max:6'
    ]);
        DB::table('users')->join('basic_details','basic_details.userID','=','users.id')->where(['users.id' => \Auth::user()->id])->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'number' => $request->get('mobNumber'),
            'eduQualificaton' => $request->get('eduQualificaton'),
            'otherQualification' => $request->get('otherQualification'),
            'addOne' => $request->get('addOne'),
            'addTwo' => $request->get('addTwo'),
            'cityVilage' => $request->get('cityVilage'),
            'district' => $request->get('district'),
            'state' => $request->get('state'),
            'pinCode' => $request->get('pinCode')
        ]);
        return redirect()->route('home')->with('message', 'The Profile Has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                    return view('errors\others');

    }
}
