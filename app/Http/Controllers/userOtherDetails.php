<?php

namespace App\Http\Controllers;

use App\OtherDetails;
use DB;
use Illuminate\Http\Request;

class userOtherDetails extends Controller
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
        return view('auth\userDetails\other');
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
            'photograph' => 'required|image|mimes:jpeg,png,jpg|max:600000',
            'signature' => 'required|image|mimes:jpeg,png,jpg|max:600000',
        ]);

        //sending errors
        if (!$request->file('photograph')->isValid()) {
            return redirect()->back()->withErrors(["photograph" => "File is corrupt"]);
        }

        if (!$request->file('signature')->isValid()) {
            return redirect()->back()->withErrors(["signature" => "File is corrupt"]);
        }

        //upload photograph
        $photographloc = time() . '_' . uniqid() . '.' . request()->photograph->getClientOriginalExtension();
        request()->photograph->move(public_path('images/photograph'), $photographloc);
        //upload signature
        $signatureloc = time() . '_' . uniqid() . '.' . request()->signature->getClientOriginalExtension();
        request()->signature->move(public_path('images/signature'), $signatureloc);

        $userOtherData = new OtherDetails([
            'userID' => $request->get('userID'),
            'photograph' => $photographloc,
            'signature' => $signatureloc,
        ]);

        $userOtherData->save();

        return redirect()->route('status.edit', ['userID' => $request->get('userID')])->with('status', '2');
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
        //  echo 'this is where the file will be updated';
        $thisID = OtherDetails::find($id);
        $this->validate($request, [
            'profilePic' => 'sometimes|image|mimes:jpeg,png,jpg|max:600000',
            'updateSignature' => 'sometimes|image|mimes:jpeg,png,jpg|max:600000',
        ]);
        //sending errors
        if (\Request::hasFile('profilePic')) {
            //upload photograph
            $photographlocUp = time() . '_' . uniqid() . '.' . request()->profilePic->getClientOriginalExtension();
            request()->profilePic->move(public_path('images/photograph'), $photographlocUp);
            //updating the database
            DB::table('other_details')->where(['userID' => \Auth::user()->id])->update([
                'photograph' => $photographlocUp,
            ]);
            //return to the home
            return redirect()->route('home')->with('message', 'Your Profile picture Has been updated');

        }
        if (\Request::hasFile('updateSignature')) {

            //upload signature
            $signaturelocUp = time() . '_' . uniqid() . '.' . request()->updateSignature->getClientOriginalExtension();
            request()->updateSignature->move(public_path('images/signature'), $signaturelocUp);
            //updating the database
            DB::table('other_details')->where(['userID' => \Auth::user()->id])->update([
                'signature' => $signaturelocUp,
            ]);
            
            //return to the home
            return redirect()->route('home')->with('message', 'Your Signature Has been updated');

        }

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
