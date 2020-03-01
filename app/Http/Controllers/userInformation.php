<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BauserInformation;

class userInformation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $months = array('January', 'February', 'March', 'April', 'May', 'June', 'july', 'August', 'September', 'October', 'November', 'December');
        $IndianState = array("Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttarakhand","Uttar Pradesh","West Bengal","Andaman and Nicobar Islands","Chandigarh","Dadra and Nagar Haveli","Daman and Diu","Delhi","Lakshadweep", "Puducherry");
        return view('userData', compact('months', 'IndianState'));
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
        $this->validate($request, [
            'fullname' => 'required|max:25',
            'fatherName' => 'required|max:25',
            'Mothername' => 'required|max:25',
            'dobdate' => 'required',
            'dobmonth' => 'required',
            'dobmonth' => 'required',
            'dobYear' => 'required',
            'caste' => 'required',
            'casteCertificateIs'=>'required',
            'emailAddress' => 'required|email',
            'gender' => 'required',
            'handiCappedStatus' => 'required',
            'nationality' => 'required',
            'state' => 'required',
            'district' => 'required',
            'block' => 'sometimes|max:20',
            'tahsil' => 'sometimes|max:20',
            'village' => 'sometimes|max:20',
            'maritalStatus' => 'required',
            'spouseName' => 'sometimes|max:20',
            'children' => 'sometimes|max:5|integer'
        ]);

        $userInformationSave = new BauserInformation([
            'userID' => \Auth::user()->id,
            'fullname' => $request->get('fullname'),
            'fatherName' => $request->get('fatherName'),
            'Mothername' => $request->get('Mothername'),
            'dobdate' => $request->get('dobdate'),
            'dobmonth' => $request->get('dobmonth'),
            'dobYear' => $request->get('dobYear'),
            'caste' => $request->get('caste'),
            'casteCertificateIs' => $request->get('casteCertificateIs'),
            'emailAddress' => $request->get('emailAddress'),
            'gender' => $request->get('gender'),
            'handiCappedStatus' => $request->get('handiCappedStatus'),
            'nationality' => $request->get('nationality'),
            'state' => $request->get('state'),
            'district' => $request->get('district'),
            'block' => $request->get('block'),
            'tahsil' => $request->get('tahsil'),
            'village' => $request->get('village'),
            'maritalStatus' => $request->get('maritalStatus'),
            'spouseName' => $request->get('spouseName'),
            'children' => $request->get('children')
        ]);

       $userInformationSave->save();

      return redirect()->route('importantstepupdate',['nextStep' => 1])->with('message', 'Your information is saved now');
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
