<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::latest()->paginate(5);
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|min:2|max:5|regex:/^[a-zA-Z]+$/u',
                           'age'=>'required|numeric',
                        'gender'=>'required',
                    'qual'=>'required',
                'hobbies'=>'required',
            'photo'=>'required|mimes:jpeg,jpg,png,gif']);

                     $img=time().'.'.$request->photo->extension();
                    $request->photo->storeAs('public/images', $img);
            
                     $request['photo_url']=$img;
            
                
                    Student::create($request->except('photo'));

        return redirect()->route('students.index')->with('success','created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate(['name'=>'required','age'=>'required']);
        $img=time().'.'.$request->photo->extension();
        $request->photo->storeAs('public/images', $img);
        $request['photo_url']=$img;
        $student->update($request->except('photo'));
        return redirect()->route('students.index')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','deleted successfully');
    }
}
