<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    private $columns = ['first_name','last_name' ,'age' ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return view("students", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    
        public function store(Request $req)
        {
        // $student = new Student() ;
        // $student->first_name =$req->first_name;
        // $student->last_name  =$req->last_name;
        // $student->age        = $req->age;
    
        // $student->save ();
        {
            Student::create($req->only($this->columns));
            return redirect('students');
            }
      
    return 'inserted Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = student::findOrFail($id);
        return view('showStudent', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = student::findOrFail($id);
        return view('editStudents', compact('student'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        student::where('id', $id)->update($request->only($this->columns));
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
       
        Student::where('id', $id)->delete();
        return redirect('students');
    }
}
