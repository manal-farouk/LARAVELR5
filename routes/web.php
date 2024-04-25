<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('manalferr/{id}' , function($id){

    return 'This is my first project at Laravel ' . $id ;

}
);