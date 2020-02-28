<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\vacancies;
use App\searchRecords;
use Illuminate\Support\Facades\DB;
class search extends Controller
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
        $this->validate($request, [
            'q' => 'required',
            'user' => 'required',
            'ip' => 'required',
            'setup' => 'required'
        ]);


        if(isset(\Auth::user()->id)){
            //inserting query data into dataBase
          $searchQuery = new searchRecords([
            'q' => $request->get('q'),
            'user' => $request->get('user'),
            'ip' => $request->get('ip'),
            'setup' => $request->get('setup')
        ]);
        $searchQuery->save();
            //finding the related query results
            $query = \request('q');
            $vacancies = vacancies::search($query)->paginate(10);
             return view('search', compact('vacancies'));
        }else{
        //inserting query data into dataBase
          $searchQuery = new searchRecords([
            'q' => $request->get('q'),
            'ip' => $request->get('ip'),
            'setup' => $request->get('setup')
        ]);
        $searchQuery->save();
        //finding the related query results
        flash('Please Sign in to search your Desired Vacancy')->important();
        return redirect()->route('welcome');
        }

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
                    return view('errors\others');

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
