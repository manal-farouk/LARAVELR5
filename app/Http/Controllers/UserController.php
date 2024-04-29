<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function saveUserData(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
    
        return view('userData')->with(compact('firstName', 'lastName'));
    }
}
