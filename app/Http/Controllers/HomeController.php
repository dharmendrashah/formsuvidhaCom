<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\userState;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $profile = DB::table('users')->join('basic_details', 'basic_details.userID', '=', 'users.id')->join('other_details', 'other_details.userID', '=', 'users.id')->where('users.id', '=', \Auth::user()->id)->first();
       // dd($profile->name);
    //  return view('home', compact('profile'));
    if(isset(\Auth::user()->id)){
        $status = userState::where('userID', \Auth::user()->id)->get('status');
        $jsonStatus = json_decode($status, true);
        $actualStatus = $jsonStatus['0']['status'];
        switch ($actualStatus) {
            case 3:
                $profile = DB::table('users')->join('basic_details', 'basic_details.userID', '=', 'users.id')->join('other_details', 'other_details.userID', '=', 'users.id')->where('users.id', '=', \Auth::user()->id)->first();
                return view('home', compact('profile'));
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
