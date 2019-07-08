<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Student;
use App\Guardian;
use Auth;

class FeedbacksController extends Controller
{
    /**
     * Display alisting of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $feedbacks = Feedback::with(['Student'])->get();
        // $student_class_students = StudentClassStudent::with(['student_class','Student'])->get();
        return view('feedbacks.index')->with('feedbacks', $feedbacks);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $students = Student::all();

        return view('feedbacks.create')
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

        // dd($request->all());
            
        //
        $user_id = Auth::user()->id;

        $feedbacks = new Feedback;
        $feedbacks->user_id = $user_id;
        
        $feedbacks->month = $request->input('month');
        $feedbacks->description = $request->input('description');
        $feedbacks->student_id = $request->input('student_id');
        // $feedbacks->user_id = $request->input('user_id');
        $feedbacks->save();
   
        return redirect('/feedbacks/?student_id='.$request->input('student_id'))->with ('success', 'Class created');

    
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
        //
        // dd($id);
        $feedbacks = Feedback::find($id);
        $students = Student::all();
        $students = Guardian::all();
        return view('feedbacks.edit')->with('feedback', $feedbacks)
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
        //
        // dd($request ->all());
        $feedbacks = Feedback::find($id);
        $feedbacks->month = $request->input('month');
        $feedbacks->description = $request->input('description');
        $feedbacks->student_id = $request->input('student_id');
        // $feedbacks->user_id = $request->input('user_id');
        
        $feedbacks->save();
        return redirect('/feedbacks/?student_id='.$request->input('student_id'))->with ('success', 'Class Updated');

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
        $feedbacks = Feedback::find($id);
        $feedbacks->delete();
        return redirect('/feedbacks/?student_id='.$_GET['student_id'])->with ('success', 'Class Deleted');

    }
}
