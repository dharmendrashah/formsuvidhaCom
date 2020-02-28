<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userState;
class userStatus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                    return view('errors\others');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auth\status\create');
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
            'status' => 'required'
        ]);

        $userStatus = new userState([
            'userID' => $request->get('userID'),
            'status' => $request->get('status')

        ]);
        $userStatus->save();
        return redirect()->route('cs')->with('status', '1');
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
    public function edit($userID)
    {
        //
        $status = userState::find($userID);
        return view('auth/status/update');
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
     userState::where('userID', $request->userID)->update(['status'=> $request->status]);
     return redirect()->route('cs');
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
