<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

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
        $teachers = Teacher::all();
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
        return view('teachers.create');
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
        $teachers= new Teacher;
        $teachers->first_name = $request->input('first_name');
        $teachers->last_name = $request->input('last_name');
        $teachers->email = $request->input('email');
        $teachers->age = $request->input('age');
        $teachers->experience = $request->input('experience');
        $teachers->aadhar_id = $request->input('aadhar_id');
        $teachers->dob = $request->input('dob');
        $teachers->gender = $request->input('gender');
        $teachers->address = $request->input('address');  
        $teachers->save();

        return redirect('/teachers')->with ('success', 'Class created');
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
        $teacher = Teacher::find($id);
        // dd($teacher);
        return view('teachers.edit')->with('teacher', $teacher);

        
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
        $teachers = Teacher::find($id);
        $teachers->first_name = $request->input('first_name');
        $teachers->last_name = $request->input('last_name');
        $teachers->email = $request->input('email');
        $teachers->age = $request->input('age');
        $teachers->experience = $request->input('experience');
        $teachers->aadhar_id = $request->input('aadhar_id');
        $teachers->dob = $request->input('dob');
        $teachers->gender = $request->input('gender');
        $teachers->address = $request->input('address');  
        $teachers->save();
        return redirect('/teachers')->with ('success', 'Class Updated');
        
       
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
        return redirect('/teachers')->with ('success', 'Class Deleted');
    }
}
