<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Student;
use App\StudentClass;

use App\StudentClassStudent;

class WorksController extends Controller
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

    // public function getSectionStudents($id){
    //     // $data = StudentClassStudent::with(['Student','StudentClass'])->where('student_class_id', $id)->get();
    //     $data = Work ::with(['Student','StudentClass'])->where('title', $id)->get();
    //     $works = Work::all();
    //     $students = Student::all();
    //     return view('works.index')->with('allData', $data)
    //     ->with('Work', $Works);
    // }

    public function index()
    {
        
        // $works = Work::with(['StudentClass'])->get();
        $works = Work::with(['StudentClass'])->get();
        // dd($works);
        return view('works.index')->with('works', $works);
        
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
        // dd($student_classes);
        return view('works.create')
        ->with('student_classes', $student_classes);
        
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
        // dd($request);
        $works = new Work;
        $student_classes = StudentClass::all();
        $works->title = $request->input('title');
        $works->description = $request->input('description');
        $works->student_class_id = $request->input('student_class_id');
        $works->save();

        return redirect('/works/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class created');
        
        
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
        $works = Work::find($id);

        // dd($works);
        // dd($work->student_class()->get());
        // dd($student_class->works()->get());
        return view('works.show')->with('work', $works);
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
        $works = Work::find($id);
        $student_classes = StudentClass::all();
        return view('works.edit')->with('work', $works)
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
        $works = Work::find($id);
        $works->title = $request->input('title');
        $works->description = $request->input('description');
        $works->student_class_id = $request->input('student_class_id');
        $works->save(); 
        return redirect('/works/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class Updated');
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
        $works = Work::find($id);
        $works->delete();
        
        return redirect('/works/?student_class_id='.$_GET['student_class_id'])->with ('success', 'Class Deleted');
    }
}
