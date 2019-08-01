<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentClassStudent;
use App\Student;
use App\StudentClass;
use App\SchoolSession;




class StudentClassStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        $student_class_students = StudentClassStudent::with(['studentClass','Student'])->get();
        // dd($student_class_students);
        // echo '<pre>';
        // print_r($student_class_students);
        // die();
        return view('student_class_students.index')->with('student_class_students', $student_class_students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student_classes = StudentClass::all();
        $schoolSessions = SchoolSession::all();
        return view('student_class_students.create')
        ->with('student_classes', $student_classes)
        ->with('school_sessions', $schoolSessions);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_class_students= new StudentClassStudent;
        $student_class_students->student_class_id = $request->input('student_class');
        $student_class_students->student_id = $request->input('student_id');
        $student_class_students->school_session_id = $request->input('school_session_id');
        $student_class_students->save();
        return redirect('/student_class_students/?student_id='.$request->input('student_id'))->with ('success', 'Class created');
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
        $student_class_student = StudentClassStudent::find($id);
        $students = Student::all();
        $schoolSessions = SchoolSession::all();
        $student_classes = StudentClass::all();
        return view('student_class_students.edit')
        ->with('student_class_student', $student_class_student)
        ->with('students', $students)
        ->with('student_classes', $student_classes)
        ->with('school_sessions', $schoolSessions);   
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
        // dd($request->all());
        $student_class_students = StudentClassStudent::find($id);
        $student_class_students->student_class_id = $request->input('student_class');
        $student_class_students->student_id = $request->input('student_id');
        $student_class_students->school_session_id = $request->input('school_session_id');
        $student_class_students->save();
        return redirect('/student_class_students/?student_id='.$request->input('student_id'))->with ('success', 'Class Updated');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_class_students = StudentClassStudent::find($id);
        $student_class_students->delete();
        return redirect('/student_class_students/?student_id='.$_GET['student_id'])->with('success', 'Class Deleted');
    }  
}


