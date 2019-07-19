<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\StudentClass;
use App\StudentClassStudent;
use App\Work;
use App\Student;

class StudentClassesController extends Controller
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
        //
        $student_class = StudentClass::all();
        // $student_class = StudentClass::with(['Student'])->get();
        // dd($student_class);
        return view('student_classes.index')->with('student_classes', $student_class);
    }
                                                                                            
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        $students = Work::all();
        // dd($students);
        
        return view('student_classes.create');
        // ->with('student_class_id', $student_id);
       
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'section' => 'required'
        ]);
        	
        // dd($request->all());
        
        $student_class = new StudentClass;
        $student_class->title = $request->input('title');
        $student_class->section = $request->input('section');
        // $student_class->student_id = $request->input('student_id');
     
        $student_class->save();

        return redirect('/student_classes')->with ('success', 'Class created');
      
      
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $student_class = StudentClass::find($id);
        // $student_class = StudentClass::where('id', $id)->firstOrFail();
        
        return view('student_classes.show')->with('student_class', $student_class);
        // ->with('works', $work);
    }
    // $works = Work::where('id', $id)->firstOrFail();   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


   
    // public function editWorks($id)
    // {
    //     // dd($id);
    //     $student_class = Work::find($id);
    //     $students = Work::all();
    //     // dd($work);
        
    //     return view('student_classes.editWorks')->with('student_class', $student_class);
    // }

    public function edit($id)
    {
        // dd($id);
        $student_class = StudentClass::find($id);
        // dd($students);
        return view('student_classes.edit')->with('student_class', $student_class);
       
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
        $this->validate($request,[
            'title' => 'required',
            'section' => 'required'
        ]);
        $student_class = StudentClass::find($id);
        $student_class->title = $request->input('title');
        $student_class->section = $request->input('section');
      
        $student_class->save();
        return redirect('/student_classes')->with ('success', 'Class Updated');
        // return redirect('/student_classes/?work_id='.$request->input('work_id'))->with ('success', 'Class Updated');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroyWorks($id)
    // {
    //     // dd($id);
    //     // $work = Work::find($id);
    //     // // dd($work);
    //     // $students = Work::all();
    //     // $work->delete();
    //     $student_class = StudentClass::find($id);
    //     $student_class->delete();
    //     StudentClassStudent::where('student_class_id', $id)->delete();
    //     // $student_class = StudentClass::find($id);
    //     // $students = Work::all();
    //     // $works = Work::all();
    //     // $works = Work::->where('id', $id)->first();
    //     // $student_class = StudentClass::with(['Work'])->where('student_class_id', $id)->get();
    // // return view('student_classes.destroyWorks')->with('student_class', $student_class);

    // return redirect('/student_classes/?work_id='.$_GET['work_id'])->with ('success', 'Class Deleted');
    // }

   

    public function destroy($id)
    {
        // dd($id);
        $student_class = StudentClass::find($id);
        $student_class->delete();
        StudentClassStudent::where('student_class_id', $id)->delete();
        // return redirect('/student_classes/')->with ('success', 'Class Deleted');
        // return redirect('/student_classes/?work_id='.$_GET['work_id'])->with ('success', 'Class Deleted');
        return redirect('/student_classes')->with ('success', 'Class Deleted');
    }
}
