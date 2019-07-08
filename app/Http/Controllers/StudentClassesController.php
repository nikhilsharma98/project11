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
        // $student_classes = StudentClass::all();
        $student_classes = StudentClass::with(['Works'])->get();
        // dd($student_classes);
        return view('student_classes.index')->with('student_classes', $student_classes);
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
        
        return view('student_classes.create')
        // ->with('work', $works);
        ->with('students', $students);
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
        $student_class->work_id = $request->input('work_id');
        
        $student_class->save();

        // return redirect('/student_classes')->with ('success', 'Class created');
        return redirect('/student_classes/?work_id='.$request->input('work_id'))->with ('success', 'Class created');
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
        // dd($student_class->works()->get());
        // dd($student_class->get());
        // dd($student_class);
        // $student_class = StudentClass::with('work')->where('id', $id)->get();
        // $works = Work::find($id);
        
        return view('student_classes.show')->with('student_class', $student_class);
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function getSectionStudents($id){
    //     // $data = StudentClassStudent::with(['Student','StudentClass'])->where('student_class_id', $id)->get();
    //   $data = Work ::with(['Student','StudentClass'])->where('title', $id)->get();
    //     $works = Work::all();
    //     $students = Student::all();
    //     return view('works.index')->with('allData', $data)
    //     ->with('Work', $Works);
    // }
    public function editWorks($id)
    {
        
        // dd($id->all());
        $student_class = Work::find($id);
        $student_class = StudentClass::with(['Work'])->where('work_id', $id)->get();
        $works = Work::all();
        // dd($student_class);
        
        return view('show.editWorks')->with('student_class', $student_class)
        ->with('work', $works);
        // ->with('student_classes', $student_classes);
        

    }

    public function edit($id)
    {
        // dd($id);
        $student_class = StudentClass::find($id);
        $students = Work::all();
        // dd($students);
        return view('student_classes.edit')->with('student_class', $student_class)
        // ->with('work', $works);
        ->with('students', $students);
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
        $student_class->work_id = $request->input('work_id');
        $student_class->save();
        // return redirect('/student_classes')->with ('success', 'Class Updated');
        return redirect('/student_classes/?work_id='.$request->input('work_id'))->with ('success', 'Class Updated');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroyWorks($id)
    // {
        
    //     $works = Work::all();
    //     // $works = Work::->where('id', $id)->first();
    //     // $student_class = StudentClass::with(['Work'])->where('student_class_id', $id)->get();
    //     // dd($student_class);

    //     return view('show.destroyWorks')->with('student_class', $student_class)
    //     ->with('work', $works);
    // ->with('students', $students);
    // }

    public function destroy($id)
    {
        // dd($id);
        $student_class = StudentClass::find($id);
        $student_class->delete();
        StudentClassStudent::where('student_class_id', $id)->delete();
        // return redirect('/student_classes')->with ('success', 'Class Deleted');
        return redirect('/student_classes/?work_id='.$_GET['work_id'])->with ('success', 'Class Deleted');
    }
}
