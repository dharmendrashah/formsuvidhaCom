<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\localAddres;
class localAddress extends Controller
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
    public function store(Request $request , $clearedStep, $vacanyId , $user)
    {
        $this->validate($request, [
            'userID' => 'required',
            'localAddOne' => 'required|max:40|min:2',
            'localAddTwo' => 'max:40|min:0',
            'localCityVillage' => 'required|max:40|min:2',
            'district' => 'required|max:25|min:2',
            'state' => 'required|max:30|min:2',
            'pinZipCode' => 'required|integer|min:6',
            'country' => 'required|max:20'
        ]);

        $localAddress = new localAddres([
            'userID' => \Auth::user()->id,
            'localAddOne' => $request->get('localAddOne'),
            'localAddTwo' => $request->get('localAddTwo'),
            'localCityVillage' => $request->get('localCityVillage'),
            'district' => $request->get('district'),
            'state' => $request->get('state'),
            'pinZipCode' => $request->get('pinZipCode'),
            'country' => $request->get('country')
        ]);

        $localAddress->save();
        return redirect()->route('updateTheFormSteps', ['clearedStep' => $clearedStep, 'clearingVacancy' => $vacanyId, 'user' => \Auth::user()->id])->with('completedSteps', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
