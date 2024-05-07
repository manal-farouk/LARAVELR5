<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::get();
        return view("studentsList", compact("student"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studentForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    
        public function store(Request $req)
        {
        $student = new Student() ;
        $student->first_name =$req->first_name;
        $student->last_name  =$req->last_name;
        $student->age        = $req->age;
    
        $student->save ();
      
    return 'inserted Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
