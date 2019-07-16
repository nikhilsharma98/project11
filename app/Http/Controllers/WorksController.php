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

   

    public function index()
    {
        // $schoolSessions = SchoolSession::all();
        
        // $works = Work::with(['StudentClass'])->get();
        // $works = Work::with(['StudentClass'])->get();
        $works = Work::all();
        $works = Work::latest()->limit(10)->get();
        // dd($works);
        // dd($works);
        return view('works.index')->with('works', $works);
        
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($student_class_id)
    {
        //
        // dd($test);
        $student_classes = StudentClass::all();
        // dd($student_classes);
        return view('works.create')->with('student_class_id', $student_class_id);
        // ->with('student_classes', $student_classes);
        
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
        // dd($request->all());
        $works = new Work;
        // $student_classes = StudentClass::all();
        // dd($student_classes);
        $works->title = $request->input('title');
        $works->description = $request->input('description');
        $works->student_class_id =  $request->input('student_class_id');
        // $works->student_class_id = $request->input('student_class_id');
        // $works->student_class_id = $request->input('student_class_id');
        $works->save();
        return redirect('/works')->with ('success', 'Class created');
        // return redirect('/works/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class created');
        
        
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
        // $student_class = StudentClass::where 
        // $works = Work::where('id', $id)->firstOrFail();
        // dd($works);
        // dd($work->student_class()->get());
        // dd($student_class->works()->get());
        return view('works.show')->with('work', $works);
    }
    // public function showArticle($slug)
    // {
    //     $article = News::where('slug', $slug)->firstOrFail();
    //     return view('article', compact('article'));
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

         // dd($request->all());
        //  dd($request)->all();
        $works = Work::find($id);
        $works->title = $request->input('title');
        $works->description = $request->input('description');
        // $works->student_class_id = $request->input('student_class_id');
        $works->save(); 
        // return redirect('/student_classes/'.$request->input('student_class_id'))->with ('success', 'Class Updated');
        // return redirect('/works/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class Updated');
        return redirect('/student_classes/1')->with ('success', 'Class Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);                                     
        $works = Work::find($id);
        // dd($works)
        $works->delete();
        
        // return redirect('/student_classes/'.$_GET['student_class_id'])->with ('success', 'Class Deleted');
        // return redirect('/works/?student_class_id='.$_GET['student_class_id'])->with ('success', 'Class Deleted');
        // return redirect('/student_classes/')->with ('success', 'Class Deleted');
        // return redirect()->back();
        //  return redirect('/student_classes/?student_class_id='.$_GET['student_class_id'])->with ('success', 'Class Deleted');
        return redirect('/student_classes/1')->with ('success', 'Class Deleted');
    }
}
