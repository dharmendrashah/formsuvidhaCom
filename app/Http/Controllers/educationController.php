<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\educatioDetailsUpdateStore;
class educationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userEducationDetails');
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
            'boardName' => 'required',
            'schoolName' => 'required',
            'schoolAddress' => 'required',
            'rollNumber' => 'required|integer',
            'totalMarks' => 'required|integer',
            'obtainedmarks' => 'required|integer',
            'passingYear' => 'required|integer',
            'tenMarksheetCopy' => 'required|image|mimes:jpeg,png,jpg|max:600000',

            'senboardName' => 'sometimes',
            'senschoolName' => 'sometimes',
            'senschoolAddress' => 'sometimes',
            'streamOfStudyInSecondaryEducation' => 'sometimes',
            'twelfthClassStatus' => 'sometimes',
            'senrollNumber' => 'sometimes|integer',
            'sentotalMarks' => 'sometimes|integer',
            'senobtainedmarks' => 'sometimes|integer',
            'senpassingYear' => 'sometimes|integer',
            'twelfthMarksheetCopy' => 'sometimes|image|mimes:jpeg,png,jpg|max:600000',

            'ugCollageName' => 'sometimes',
            'ugUniversityName' => 'sometimes',
            'streamOfStudyUg' => 'sometimes',
            'ugCollageAddress' => 'sometimes',
            'underGraduationStatus' => 'sometimes',
            'finalYearRollNumberUg' => 'sometimes|integer',
            'finalyearmarsksheetUG' => 'sometimes|integer',
            'ugFinalYearObtainedMarks' => 'sometimes|integer',
            'ugFinalMarksheet' => 'sometimes|image|mimes:jpeg,png,jpg|max:600000',

            'pgCollageName' => 'sometimes',
            'pgUniversityName' => 'sometimes',
            'streamOfStudyPg' => 'sometimes',
            'pgCollageAddress' => 'sometimes',
            'postGraduationStatus' => 'sometimes',
            'finalYearRollNumberPg' => 'sometimes|integer',
            'finalyearmarsksheetPG' => 'sometimes|integer',
            'pgFinalYearObtainedMarks' => 'sometimes|integer',
            'pgFinalMarksheet' => 'sometimes|image|mimes:jpeg,png,jpg|max:600000'
        ]);
          //  printf(request()->tenMarksheetCopy);
          if($request->hasfile('tenMarksheetCopy')){
            if($request->file('tenMarksheetCopy')->isValid()){
                //tenthmarksheet photograph
            $tenthMarksheetPic = time() . '_' . uniqid() . '.' . request()->tenMarksheetCopy->getClientOriginalExtension();
            request()->tenMarksheetCopy->move(public_path('images/tenthMarksheet'), $tenthMarksheetPic);

            }
            }else{
                $tenthMarksheetPic = 'NA';
            }


            if($request->hasfile('twelfthMarksheetCopy')){
                if($request->file('twelfthMarksheetCopy')->isValid()){
                    //twelfthmarksheet signature
                $twelfthmarksheetPic = time() . '_' . uniqid() . '.' . request()->twelfthMarksheetCopy->getClientOriginalExtension();
                request()->twelfthMarksheetCopy->move(public_path('images/twelfthMarksheet'), $twelfthmarksheetPic);
                }
            }else{
                $twelfthmarksheetPic = 'NA';
            }


            if($request->hasfile('ugFinalMarksheet')){
                if($request->file('ugFinalMarksheet')->isValid()){
                 //undergraduationMarksheetpPic
                 $UgmarksheetPic = time() . '_' . uniqid() . '.' . request()->ugFinalMarksheet->getClientOriginalExtension();
                 request()->ugFinalMarksheet->move(public_path('images/UgMarksheet'), $UgmarksheetPic);
                }
            }else{
                $UgmarksheetPic = 'NA';

            }

            if($request->hasfile('pgFinalMarksheet')){
                if($request->file('pgFinalMarksheet')->isValid()){
                 //pg Pic
                 $pgMarksheetPic = time() . '_' . uniqid() . '.' . request()->pgFinalMarksheet->getClientOriginalExtension();
                 request()->pgFinalMarksheet->move(public_path('images/PgMarksheet'), $pgMarksheetPic);
                }
            }else{
                $pgMarksheetPic = 'NA';
            }

           // echo "tenmarkSheet: $tenthMarksheetPic , twelfthmarksheetPic: $twelfthmarksheetPic, Ug marksheet: $UgmarksheetPic, pgMarksheet: $pgMarksheetPic";


      $saveTheEducationQualification = new educatioDetailsUpdateStore([
          'userID' => \Auth::user()->id,
        'boardName' => $request->get('boardName'),
        'schoolName' => $request->get('schoolName'),
        'schoolAddress' => $request->get('schoolAddress'),
        'rollNumber' => $request->get('rollNumber'),
        'totalMarks' => $request->get('totalMarks'),
        'obtainedmarks' => $request->get('obtainedmarks'),
        'passingYear' => $request->get('passingYear'),
        'tenMarksheetCopy' => $tenthMarksheetPic,

        'senboardName' => $request->get('senboardName'),
        'senschoolName' => $request->get('senschoolName'),
        'senschoolAddress' => $request->get('senschoolAddress'),
        'streamOfStudyInSecondaryEducation' => $request->get('streamOfStudyInSecondaryEducation'),
        'twelfthClassStatus' => $request->get('twelfthClassStatus'),
        'senrollNumber' => $request->get('senrollNumber'),
        'sentotalMarks' => $request->get('sentotalMarks'),
        'senobtainedmarks' => $request->get('senobtainedmarks'),
        'senpassingYear' => $request->get('senpassingYear'),
        'twelfthMarksheetCopy' => $twelfthmarksheetPic,

        'ugCollageName' => $request->get('ugCollageName'),
        'ugUniversityName' => $request->get('ugUniversityName'),
        'streamOfStudyUg' => $request->get('streamOfStudyUg'),
        'ugCollageAddress' => $request->get('ugCollageAddress'),
        'underGraduationStatus' => $request->get('underGraduationStatus'),
        'finalYearRollNumberUg' => $request->get('finalYearRollNumberUg'),
        'finalyearmarsksheetUG' => $request->get('finalyearmarsksheetUG'),
        'ugFinalYearObtainedMarks' => $request->get('ugFinalYearObtainedMarks'),
        'ugFinalMarksheet' => $UgmarksheetPic,

        'pgCollageName' => $request->get('pgCollageName'),
        'pgUniversityName' => $request->get('pgUniversityName'),
        'streamOfStudyPg' => $request->get('streamOfStudyPg'),
        'pgCollageAddress' => $request->get('pgCollageAddress'),
        'postGraduationStatus' => $request->get('postGraduationStatus'),
        'finalYearRollNumberPg' => $request->get('finalYearRollNumberPg'),
        'finalyearmarsksheetPG' => $request->get('finalyearmarsksheetPG'),
        'pgFinalYearObtainedMarks' => $request->get('pgFinalYearObtainedMarks'),
        'pgFinalMarksheet' => $pgMarksheetPic
      ]);
      $saveTheEducationQualification->save();
      return redirect()->route('importantstepupdate', ['nextStep' => 2]);
      //printf($saveTheEducationQualification);

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
