<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class thispagewillprintuserDataController extends Controller
{
    public function index(){
        $allInfo = DB::table('userfinalinformation')->join('educationupdatestore', 'educationupdatestore.userID', '=', 'userfinalinformation.userId')->join('userDetailDocumentsUpload', 'userDetailDocumentsUpload.userID', '=', 'userfinalinformation.userId')->join('basic_details', 'basic_details.userID', '=', 'userfinalinformation.userId')->where('userfinalinformation.userId', '=', \Auth::user()->id)->first();
       //print_r($allInfo);
       return view('printingpage', compact('allInfo'));
    }
}
