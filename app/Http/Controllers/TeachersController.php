<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\StudentClass;
use App\TeacherStudentClass;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers = Teacher::with(['StudentClass'])->get();
        // dd($teachers);
        // dd($teachers);
        // $teachers = Teacher::all();
        return view('teachers.index')->with('teachers', $teachers);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $student_classes = StudentClass::all();
        return view('teachers.create')
        ->with('student_classes', $student_classes);
    }

    public function createStudentClass(Request $request, $teacher_id)
    {
        
        //
        // dd($request->all());
        // dd($teacher_id);
        $student_classes = StudentClass::all();
        $teachers = Teacher::all();
        return view('teachers.createstudentclass')
        ->with('student_classes', $student_classes)
        ->with('teacher_id', $teacher_id);
    }

    public function storeStudentClass(Request $request)
    {
        // dd($request->all());
        
            $data = new TeacherStudentClass;
            $data->teacher_id = $request->input('teacher_id');
            $data->student_class_id = $request->input('student_class_id');
            $data->save();
        
            return redirect('teachers/'.$request->input('student_class_id'));
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $teachers= new Teacher;
        $teachers->first_name = $request->input('first_name');
        $teachers->last_name = $request->input('last_name');
        // $teachers->student_class = $request->input('student_class');
        $teachers->email = $request->input('email');
        $teachers->age = $request->input('age');
        $teachers->experience = $request->input('experience');
        $teachers->aadhar_id = $request->input('aadhar_id');
        $teachers->dob = $request->input('dob');
        $teachers->gender = $request->input('gender');
        $teachers->address = $request->input('address'); 
        $teachers->student_class_id = $request->input('student_class_id'); 
        // $teachers->student_class_id = $request->input('teacher_id'); 
        $teachers->save();

        // return redirect('/teachers')->with ('success', 'Class created');
        return redirect('/teachers/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($teacher_id)
    {
        //
        // dd($teacher_id);    
        $teacher = Teacher::find($teacher_id);
        // dd($teacher);
        return view('teachers.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // dd($id);
        $teacher = Teacher::find($id);
        // dd($teacher);
        $student_classes = StudentClass::all();
        // dd($student_classes);
        // dd($teacher);
        return view('teachers.edit')->with('teacher', $teacher)
        ->with('student_classes', $student_classes);

        
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
        //
        // dd($request->all());
        $teachers = Teacher::find($id);
        $teachers->first_name = $request->input('first_name');
        $teachers->last_name = $request->input('last_name');
        // $teachers->student_class = $request->input('student_class');
        $teachers->email = $request->input('email');
        $teachers->age = $request->input('age');
        $teachers->experience = $request->input('experience');
        $teachers->aadhar_id = $request->input('aadhar_id');
        $teachers->dob = $request->input('dob');
        $teachers->gender = $request->input('gender');
        $teachers->address = $request->input('address');
        $teachers->student_class_id = $request->input('student_class_id'); 
        $teachers->save();
        // return redirect('/teachers')->with ('success', 'Class Updated');
        return redirect('/teachers/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class Updated');
        

       
    }
   
    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $teachers = Teacher::find($id);
        $teachers->delete();
        // return redirect('/teachers')->with ('success', 'Class Deleted');
        return redirect('/teachers/?student_class_id='.$_GET['student_class_id'])->with('success', 'Class Deleted');
        
    }
}


