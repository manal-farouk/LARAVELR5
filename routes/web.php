<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('test50', [MyController::class, 'my_data']);

Route::get('/', function () {
    return view('welcome');
});
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
            

// Route::get('test', function(){
// return view('test');
// });

Route::get('form1', function(){
    return view('form1');
    });

    Route::post('recForm1', function() {
        return 'data received';
        })->name('receiveForm1');

       
        
    
            
            
        
 