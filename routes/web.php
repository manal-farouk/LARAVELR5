<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;

Route::get('test50', [MyController::class, 'my_data']);

// task session 2
Route::get('form1', function(){
    return view('form1');
        });
Route::post('/save-user-data', 'App\Http\Controllers\UserController@saveUserData')->name('saveUserData');

//student form task session 3 

Route::get('studentForm',[StudentController::class, 'create'])->name('createStudent');

Route::post('insertStudentForm', [StudentController::class, 'store'])
->name('receivestudentForm');

//student form task session 4 

Route::post('insertStudent',  [StudentController::class, 'store'])->name('insertStudent'); 
Route::get('addStudent',[StudentController::class, 'create'])->name('addStudent');
Route::get('students'  , [StudentController::class, 'index'])->name('students');
   
//student form task session 5
Route::get("editStudents/{id}", [StudentController::class,"edit"])->name('editStudents');
Route::put("updateStudents/{id}", [StudentController::class,"update"])->name('updateStudents');
Route::get("showStudent/{id}", [StudentController::class,"show"])->name('showStudent');
Route::delete("delete", [StudentController::class,"destroy"])->name('delStudent');


//student form task session 6
Route::delete("forceDelete", [StudentController::class,"forceDelete"])->name('forceDelete');
Route::get("trashStudent", [StudentController::class,"trash"])->name('trashStudent');
Route::get("restoreStudent/{id}", [StudentController::class,"restore"])->name('restoreStudent');

//client form during session 2 to 6
    Route::post('insertClient', [ClientController::class, 'store'])->name('insertClient'); 
    Route::get('addClient',[ClientController::class, 'create'])->name('addClient');
    Route::get('clients'  ,[ClientController::class, 'index'])->name('clients');
    Route::get("editClients/{id}", [ClientController::class,"edit"])->name('editClients');
    Route::put("updateClients/{id}", [ClientController::class,"update"])->name('updateClients');
    Route::get("showClient/{id}", [ClientController::class,"show"])->name('showClient');
    Route::delete("delete", [ClientController::class,"destroy"])->name('delClient');
   
    Route::delete("forceDelete", [ClientController::class,"forceDelete"])->name('forceDelete');
    Route::get("trashClient", [ClientController::class,"trash"])->name('trashClient');
    Route::get("restoreClient/{id}", [ClientController::class,"restore"])->name('restoreClient');
    


   // Route::get('insertClient', [ClientController::class, 'create'])->name('createClient');

    // during session 2
//Route::get('insertClient', [ClientController::class, 'store']);






// Route::get('manalferr/{id?}' , function($id=0){

//     return 'This is my first project at Laravel ' . $id ;

// }
// )
// ->where(['id'=> '[0-9]+']);


// Route::get('manalferr/{id?}' , function($id=0){

//     return 'This is my first project at Laravel ' . $id ;

// }
// )
// ->whereNumber(['id']);

// Route::get('girl/{name?}', function ($name) {

//     return 'The girl name is:' . $name;

//     })->whereIn('name',['Manal','Mona','Rana']);

    // Route::prefix('cars')->group(function () {

    //     Route::get('BMW', function(){
    //     return 'Category is BMW';
    //     });



        // Route::fallback(function() {
        //    // return 'The requierd is not found';
        //     return redirect('/');
        //     });
            





    // Route::post('recForm1', function() {
    //     return 'data received';
    //     })->name('receiveForm1');

        // Route::post('recForm1', function() {
        //     return '$firstName';
        //     return '$lastName';
        //     })->name('receiveForm3');

            
            // Route::get('form1', function(){
            //     return view('formData');
            //     });


        // Route::get('/', function () {
        //     return view('formData', ['$firstName' => 'First_Name']);
        //     return view('formData', ['$lastName' => 'Last_Name']);
        // })->name('receiveForm2');

 

            // Route::get('/', function () {
            //     $firstNameTit = 'First Name';
            //     return view('formData')->with('firstNameTit', $firstNameTit)->
            //                  with('FirstName', 'FirstName');
            // //    // $firstName = 'First Name';
            // //     return view('formData')->with('firstName', $firstName)->
            // //                  with('articlePublished', 'On GeeksforGeeks');
            //  })->name('receiveForm1');

        //  Route::get('/', function () {
        //     $firstName = 'FirstName';
        //     //$lastName = 'lastName';
            
        //     return view('formData')->with('FirstName', $firstName)->
        //                  with('articlePublished', 'On GeeksforGeeks');
        //  })->name('receiveForm1');

        Route::get('/', function () {
            return view('welcome');
        });
        
        Route::get('test', function(){
            return view('test');
            });
        

         

    
   



       
        
    
            
            
        
 