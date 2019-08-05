<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentFee;
use App\StudentClass;

class StudentFeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $studentFees = StudentFee::with(['StudentClass'])->get();
        return view('student_fees.index')->with('student_fees', $studentFees);
        
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
        return view('student_fees.create')
        ->with('student_classes', $student_classes);
    }
    // public function createStudentClass(Request $request, $teacher_id)
    // {
        
    //     //
    //     // dd($request->all());
    //     // dd($teacher_id);
    //     $student_classes = StudentClass::all();
    //     $teachers = Teacher::all();
    //     return view('teachers.createstudentclass')
    //     ->with('student_classes', $student_classes)
    //     ->with('teacher_id', $teacher_id);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $studentFees = new StudentFee;
        $studentFees->class_fees = $request->input('class_fees');
        $studentFees->student_class_id = $request->input('student_class_id');
        $studentFees->save();

        // return redirect('/student_fees')->with ('success', 'Class created');
        return redirect('/student_fees/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student_fee_id)
    {
        //
        // dd('okay');
        // dd($student_fee_id);
        $studentFee = StudentFee::find($student_fee_id);
        // dd($studentFee);
        return view('student_fees.show')->with('studentFee', $studentFee);
      
    }
    // public function show($teacher_id)
    // {
    //     //
    //     // dd($teacher_id);    
    //     $teacher = Teacher::find($teacher_id);
    //     // dd($teacher);
    //     return view('teachers.show')->with('teacher', $teacher);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $studentFee = StudentFee::find($id);
        $student_classes = StudentClass::all();
        // dd($studentFee);
        return view('student_fees.edit')->with('student_fees', $studentFee)
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
        $studentFees = StudentFee::find($id);
        $studentFees->class_fees = $request->input('class_fees');
        $studentFees->student_class_id = $request->input('student_class_id');
        $studentFees->save();
        // return redirect('/student_fees')->with ('success', 'Class Updated');
        return redirect('/student_fees/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class Updated');
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
        $studentFees = StudentFee::find($id);
        $studentFees->delete();
        // return redirect('/student_fees')->with ('success', 'Class Deleted');
        return redirect('/student_fees/?student_class_id='.$_GET['student_class_id'])->with('success', 'Class Deleted');
    }
}
