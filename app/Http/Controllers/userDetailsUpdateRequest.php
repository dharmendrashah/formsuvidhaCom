<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userDocumentsUpdateModel;
class userDetailsUpdateRequest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('userDocumentsUpdate');
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
            'passPic' => 'required|image|mimes:jpeg,png,jpg|max:600000',
            'hindiSignature' => 'required|image|mimes:jpeg,png,jpg|max:600000',
            'englishSignature' => 'required|image|mimes:jpeg,png,jpg|max:600000',
            'leftThumbprint' => 'required|image|mimes:jpeg,png,jpg|max:600000',
            'rightThumbprint' => 'required|image|mimes:jpeg,png,jpg|max:600000',
            'aadharcardpic' => 'required|image|mimes:jpeg,png,jpg|max:600000'
        ]);

        if($request->hasfile('passPic')){
            if($request->file('passPic')->isValid()){
                //tenthmarksheet photograph
            $passPicloc = time() . '_' . uniqid() . '.' . request()->passPic->getClientOriginalExtension();
            request()->passPic->move(public_path('images/passPic'), $passPicloc);
            }
            }else{
                $passPicloc = 'NA';
            }

            if($request->hasfile('hindiSignature')){
                if($request->file('hindiSignature')->isValid()){
                    //tenthmarksheet photograph
                $hindiSignatureloc = time() . '_' . uniqid() . '.' . request()->hindiSignature->getClientOriginalExtension();
                request()->hindiSignature->move(public_path('images/hindiSignature'), $hindiSignatureloc);
                }
            }else{
                    $hindiSignatureloc = 'NA';
                }



                if($request->hasfile('englishSignature')){
                    if($request->file('englishSignature')->isValid()){
                        //tenthmarksheet photograph
                    $englishSignatureloc = time() . '_' . uniqid() . '.' . request()->englishSignature->getClientOriginalExtension();
                    request()->englishSignature->move(public_path('images/englishSignature'), $englishSignatureloc);
                    }
                }else{
                        $englishSignatureloc = 'NA';
                    }


                    if($request->hasfile('leftThumbprint')){
                        if($request->file('leftThumbprint')->isValid()){
                            //tenthmarksheet photograph
                        $leftThumbprintloc = time() . '_' . uniqid() . '.' . request()->leftThumbprint->getClientOriginalExtension();
                        request()->leftThumbprint->move(public_path('images/leftThumbprint'), $leftThumbprintloc);
                        }
                    }else{
                            $leftThumbprintloc = 'NA';
                        }

                        if($request->hasfile('rightThumbprint')){
                            if($request->file('rightThumbprint')->isValid()){
                                //tenthmarksheet photograph
                            $rightThumbprintloc = time() . '_' . uniqid() . '.' . request()->rightThumbprint->getClientOriginalExtension();
                            request()->rightThumbprint->move(public_path('images/rightThumbprint'), $rightThumbprintloc);
                            }
                        }else{
                                $rightThumbprintloc = 'NA';
                            }

                            if($request->hasfile('aadharcardpic')){
                                if($request->file('aadharcardpic')->isValid()){
                                    //tenthmarksheet photograph
                                $aadharcardpicloc = time() . '_' . uniqid() . '.' . request()->aadharcardpic->getClientOriginalExtension();
                                request()->aadharcardpic->move(public_path('images/aadharcardpic'), $aadharcardpicloc);
                                }
                            }else{
                                    $aadharcardpicloc = 'NA';
                                }

                                $userDocumentsUpdate = new userDocumentsUpdateModel([
                                    'userID' => \Auth::user()->id,
                                    'passPic' => $passPicloc,
                                    'hindiSignature' => $hindiSignatureloc,
                                    'englishSignature' => $englishSignatureloc,
                                    'leftThumbprint' => $leftThumbprintloc,
                                    'rightThumbprint' => $rightThumbprintloc,
                                    'aadharcardpic' => $aadharcardpicloc
                                ]);

                               $userDocumentsUpdate->save();
                               return redirect()->route('importantstepupdate', ['nextStep' => 3]);


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
