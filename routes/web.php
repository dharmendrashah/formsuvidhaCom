<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\vacancies;
use App\formController;
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
//user Status route
Route::get('/cs', 'statusRoute@index')->name('cs');

Route::get('/home', 'HomeController@index')->name('home');
//for inserting user data
Route::resource('/user/detail/basic','userBasicDetail');
//for ueser status
Route::resource('/user/status', 'userStatus');
//for updating photos videos etc
Route::resource('/user/detail/other', 'userOtherDetails');
//getting search results
 Route::get('/search', 'search@store');
//getting detail information about the post
 Route::get('/vacancy/{vacancies}', function(vacancies $vacancies){
   $checkForm = DB::table('form_controllers')->where(['vacancy' => $vacancies->id, 'userID' => \Auth::user()->id])->get();

    // dd($checkForm);
     $inJson = json_decode($checkForm, true);
     if(!empty($inJson)){
        $formStatusOfThis = $inJson['0']['status'];
        $formStatusOfThisUser = strval($formStatusOfThis);
     }else{
        $formStatusOfThis = '';
        $formStatusOfThisUser = strval($formStatusOfThis);
     }
   //  echo $formStatusOfThisUser;
    //  $formStatusOfThisUser = $inJson['0']['status'];
    return view('detail', compact('vacancies', 'formStatusOfThisUser'));
 });
 //insert the vacancy information into the database
 Route::get('/vacancies/rs/{vcancyId}/{userID}/{status}', 'vacancyDocuments@getDataInsert')->name('dataInsert');
//for applying the vacancy
Route::get('/vacancies/{vcancyId}/{userID}/{status}', 'formControll@show')->name('fillNow');
//update the CompletedtSteps Table
route::get('/vacancies/steps/update/{clearedStep}/{clearingVacancy}/{user}', 'formStepsControll@stepsUpdate')->name('updateTheFormSteps');

//go to the controller and check the all needed documents
Route::post('/vacancy/Check', 'formControll@store')->name('formCheck');

//for completed the user Steps
Route::get('/vacancy/check/{user}', 'formStepsControll@stepsGet')->name('');
//routes for detail parcels start

Route::post('/vacancy/{clearedStep}/{clearingVacancy}/{user}/localAddress', 'localAddress@store')->name('localAddress');

//userimportantstepsController
Route::get('/stepsFollow', 'importantStepsController@index')->name('stepsControllerImportant');
Route::get('/stepsFollow/these', 'importantStepsController@checkUserStep')->name('stepsControllerFollow');
Route::get('/stepsFollow/these/{nextStep}', 'importantStepsController@updateChekUserSteps')->name('importantstepupdate');
//user information get
Route::get('/stepsImportant', 'userInformation@index')->name('stepsInportant'); //this will show the user information page
//form action field
Route::post('/stepsImportant/save', 'userInformation@store')->name('stepsSave');
//routes for detail parcels end

//educationQualification
Route::get('/educationQualificationUpdate', 'educationController@index')->name('educationInformationUpdate');
Route::post('/educationQualificationUpdate/store', 'educationController@store')->name('educationInformationStore');

//important documents update
Route::get('/userDetailsUpdateRequest', 'userDetailsUpdateRequest@index')->name('userUpdateRequest');
//storing the data
Route::post('/userDetailsUpdateRequest', 'userDetailsUpdateRequest@store')->name('userUpdateRequestStore');
 /*
end of route
 */
