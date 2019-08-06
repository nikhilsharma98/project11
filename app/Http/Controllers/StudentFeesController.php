<?php

namespace App\Http\Controllers;

use App\StudentFee;
use App\StudentClass;
use App\TeacherStudentFees;
use Illuminate\Http\Request;

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
        // dd($studentFees);
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
    public function createStudentFees(Request $request, $student_fee_id)
    {
        
        //
        // dd($request->all());
        // dd($teacher_id);
        $student_classes = StudentClass::all();
        $studentFees = StudentFee::all();
        return view('student_fees.createstudentfees')
        ->with('student_classes', $student_classes)
        ->with('student_fee_id', $student_fee_id);
    }

    public function storeStudentFees(Request $request)
    {
            // dd($request->all());
        
            $StudentFees = new TeacherStudentFees;
            $StudentFees->student_fee_id = $request->input('student_fee_id');
            $StudentFees->student_class_id = $request->input('student_class_id');
            $StudentFees->save();
        
            return redirect('student_fees/'.$request->input('student_class_id'));
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
    public function show($id)
    {
        //
        // dd('okay');
        $studentFee = StudentFee::find($id);
        // dd($teacher);
        return view('student_fees.show')->with('student_fee', $studentFee);
      
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
