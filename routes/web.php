<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;

Route::get('test50', [MyController::class, 'my_data']);

Route::get('insertClient', [ClientController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});


// Route::get('test', function(){
//     return view('test');
//     });

// Route::get('form1', function(){
//     return view('form1');

//         });

     
    Route::get('form2',[ClientController::class, 'create']);

    Route::post('insertClientForm2', [ClientController::class, 'store'])
    ->name('receiveForm2');

    Route::get('insertClient', [ClientController::class, 'create'])->name('createClient');

    // Route::post('/save-user-data', 'App\Http\Controllers\UserController@saveUserData')->name('saveUserData');

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

    //     Route::get('mercedes', function(){
    //     return 'Category is Mercedes ';
    //     });
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

         

    
   



       
        
    
            
            
        
 