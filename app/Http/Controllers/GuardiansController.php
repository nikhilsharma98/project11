<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guardian;
use App\Student;
use App\StudentClassStudent;
// use Auth;


class GuardiansController extends Controller
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
        $guardians = Guardian::with(['Student'])->get();
        // $student_class_students = StudentClassStudent::with(['student_class','Student'])->get();
        return view('guardians.index')->with('guardians', $guardians);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $student_class_students = StudentClassStudent::all();
        $students = Student::all();
        return view('guardians.create')
        ->with('student_class_students', $student_class_students)
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
        // // dd($request->all());
        // //   $student_id = Auth::user()->id;
        //   // Handle file upload        
        //   if($request->hasfile('father_image','mother_image')){    
        //     $filenameWithExt = $request->file('father_image','mother_image')->getClientOriginalName();
        //     //get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //get just ext
        //     $extension = $request->file('father_image')->getClientOriginalExtension();   
        //     $imageName = $filename . "_" .time().'.'.$request->file('father_image')->getClientOriginalExtension(); 
        //     $imageName1 = $filename . "_" .time().'.'.$request->file('mother_image')->getClientOriginalExtension(); 
        //     $request->file('father_image')->move(public_path('guardian'), $imageName );
        //     $request->file('mother_image')->move(public_path('guardian'), $imageName1);
        //     }
        //         // dd($request->hasfile('father_image'));

        if($request->hasfile('father_image') || $request->hasfile('mother_image')){    
            $filenameWithExt = $request->file('father_image','mother_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            if($request->hasfile('father_image')){
                $extension = $request->file('father_image')->getClientOriginalExtension();
                $imageName = $filename . "_" .time().'.'.$request->file('father_image')->getClientOriginalExtension(); 
                $request->file('father_image')->move(public_path('guardian'), $imageName );
            }
            if($request->hasfile('mother_image')){
                $extension = $request->file('mother_image')->getClientOriginalExtension();
                $imageName1 = $filename . "_" .time().'.'.$request->file('mother_image')->getClientOriginalExtension();
                $request->file('mother_image')->move(public_path('guardian'), $imageName1);
            }
          }else
            {
                $fileNameToStore = 'noimage.jpeg';   
            }
            
        //
        $guardians = new Guardian;
        
        
        $guardians->father_name = $request->input('father_name');
        $guardians->father_image = $imageName;
        $guardians->father_occupation = $request->input('father_occupation');
        $guardians->mother_name = $request->input('mother_name');
        $guardians->mother_image = $imageName1;
        $guardians->mother_occupation = $request->input('mother_occupation');
        $guardians->student_id = $request->input('student_id');
        $guardians->save();

        return redirect('/guardians/?student_id='.$request->input('student_id'))->with ('success', 'Class created');

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
        $guardians = Guardian::find($id);
        $student_class_students = StudentClassStudent::all();
        $students = Student::all();
        return view('guardians.edit')->with('guardian', $guardians)
        ->with('student_class_students', $student_class_students)
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
        if($request->hasfile('father_image') || $request->hasfile('mother_image')){ 
            if(!empty($request->hasfile('father_image'))){

            $filenameWithExt = $request->file('father_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('father_image')->getClientOriginalExtension();

            $imageName = $filename . "_" .time().'.'.$request->file('father_image')->getClientOriginalExtension(); 
            $request->file('father_image')->move(public_path('guardian'), $imageName );
            }

            if(!empty($request->hasfile('mother_image'))){

            $filenameWithExt = $request->file('mother_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('mother_image')->getClientOriginalExtension();

            $imageName1 = $filename . "_" .time().'.'.$request->file('mother_image')->getClientOriginalExtension();

            $request->file('mother_image')->move(public_path('guardian'), $imageName1);
            }
        }
            
            $guardians = Guardian::find($id);
            $guardians->father_name = $request->input('father_name');
            if(!empty($request->hasfile('father_image'))){
            $guardians->father_image = $imageName;
            }
            $guardians->father_occupation = $request->input('father_occupation');
            
            $guardians->mother_name = $request->input('mother_name');
            if(!empty($request->hasfile('mother_image'))){
            $guardians->mother_image = $imageName1;
            }
            $guardians->mother_occupation = $request->input('mother_occupation');
            $guardians->student_id = $request->input('student_id');
            
            $guardians->save();
            return redirect('/guardians/?student_id='.$request->input('student_id'))->with ('success', 'Class Updated');
    }

        
    
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guardians = Guardian::find($id);
        $guardians->delete();
        // return redirect('/student_class_students/?student_id='.$_GET['student_id'])->with('success', 'Class Deleted');
        return redirect('/guardians/?student_id='.$_GET['student_id'])->with('success', 'Class Deleted');
    }
}
