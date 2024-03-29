<?php

namespace App\Http\Controllers;

use App\Work;
use App\State;
use App\Student;
use App\Teacher;
use App\Countary;
use App\StudentClass;
use App\StudentClassStudent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Illuminate\Support\Facades\Storage;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'show']]);
    // }

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
       
        // $students = Student::all();
        $students = Student::with(['StudentClass'])->get();
        // dd($students);
        // echo '<pre>';
        // print_r($students);
        // die(); 
        // $students = Student::latest()->limit(1)->get();
        return view('students.index')->with('students', $students);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $teachers = Teacher::all();
        $students = Student::all();
        // dd($students);
        $student_class_students = Work::all();
        $states = State::all();
        $countries = Countary::all();
        $student_classes = StudentClass::all();
        // dd($student_classes);
        $student_class = StudentClass::all();
        $student_classes = StudentClassStudent::all();
        // dd($countries);
         return view('students.create')
         ->with('states', $states)
         ->with('countries', $countries)
         ->with('students', $students)
         ->with('student_class', $student_class)
         ->with('student_class_students', $student_class_students);
        //  ->with('teachers', $teachers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all())  ;
        // dd($request->input('photo'));
        //
        $this->validate ($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'aadhar_id' => 'required',
            'dob' => 'required',
            'doa' => 'required',
            // 'photo' => 'photo|nullable|max:1999',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state_id' => 'required',
            'countary_id' => 'required'
            ]);
        
            
        // Handle file upload        
        if($request->hasfile('photo')){    
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();   
            $imageName = $filename . "_" .time().'.'.$request->file('photo')->getClientOriginalExtension(); 
            $request->file('photo')->move(public_path('images'), $imageName);
            }
                // dd($request->hasfile('photo'));
            else
            {
                $fileNameToStore = 'noimage.jpeg';   
            }
        
        //    dd($request->all());
          
          $students= new Student;
          $status = $request->status;
          $students->first_name = $request->input('first_name');
          $students->last_name = $request->input('last_name');
          $students->email = $request->input('email');
          $students->father_name = $request->input('father_name');
          $students->mother_name = $request->input('mother_name');
          $students->aadhar_id = $request->input('aadhar_id');
          $students->dob = $request->input('dob');
          $students->doa = $request->input('doa');
          $students->photo = $imageName;
          $students->gender = $request->input('gender');
          $students->address = $request->input('address');
          $students->city = $request->input('city');
          $students->state_id = $request->input('state_id');
          $students->countary_id = $request->input('countary_id'); 
          $students->status = $request->input('status'); 
          $students->student_class_id = $request->input('student_class_id'); 
          $students->save();
  
        //   return redirect('/students')->with ('success', 'Class created');
        return redirect('/students/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class created');
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
        // dd($id);
        // dd("okay");
        // $students = Student::find($id);
        // dd($students);
        $students = Work::latest()->limit(10)->get();
        // $Works = Work::find($id);
        // dd($Work);
        return view('students.show')->with('students', $students)
        ->with('works', $works);
    }

    public function studentDetail($id)
    {
        // dd($id);
        // dd("okay");
        // $students = Student::all();
         $student = Student::find($id);
        //  $student->status = $request->query('value');
         
        // return view('students.studentdetail')->with('student', $student);
            // ->with('student_id', $student_id);

        return response()->json($student);

    }


    public function StudentStatus(Request $request)
    {
        // dd($request->all());
        // $student = Student::find($id);
        $student = Student::find($request->query('id'));
        $student->status = $request->query('valu');
        $student->save();
        return response()->json(true);
        // return view('students.studentstatus')->with('student', $student);
        
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
        // $teachers = Teacher::all();
        $students = Student::find($id); 
        $countries = Countary::all();
        $states = State::all();
        // $student_classes = StudentClass::all();
        $student_class = StudentClass::all();
        $student_classes = StudentClassStudent::all();
        // dd($states->all());
        

        return view('students.edit')
        ->with('student', $students)
        ->with('countries', $countries)
        ->with('states', $states)
        ->with('student_class', $student_class);
        // ->with('teachers', $teachers);
        
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

        $this->validate ($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'aadhar_id' => 'required',
            'dob' => 'required',
            'doa' => 'required',
            'photo' => 'image|nullable|max:1999',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state_id' => 'required',
            'countary_id' => 'required'
            ]);

                 //Handle file upload
        if($request->hasfile('photo')){
           
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $imageName = $filename . "_" .time().'.'.$request->file('photo')->getClientOriginalExtension(); 
            $request->file('photo')->move(public_path('images'), $imageName);
        }   
            // dd($request->hasfile('photo'));
          
          $students = Student::find($id);
        //   dd($request->all());
          $status = $request->status;
          $students->first_name = $request->input('first_name');
          $students->last_name = $request->input('last_name');
          $students->email = $request->input('email');
          $students->father_name = $request->input('father_name');
          $students->mother_name = $request->input('mother_name');
          $students->aadhar_id = $request->input('aadhar_id');
          $students->dob = $request->input('dob');
          $students->doa = $request->input('doa');
          $students->photo = $imageName;
          $students->gender = $request->input('gender');
          $students->address = $request->input('address');
          $students->city = $request->input('city');
          $students->state_id = $request->input('state_id');
          $students->countary_id = $request->input('countary_id');
          $students->status = $request->input('status'); 
          $students->student_class_id = $request->input('student_class_id');

          if($request->hasfile('photo')){
                $students->photo = $imageName;
            }
            
          $students->save();
        
        // return redirect('/students')->with ('success', 'Class Updated');
        return redirect('/students/?student_class_id='.$request->input('student_class_id'))->with ('success', 'Class Updated');

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
        $students = Student::find($id);
        $students->delete();
        // return redirect('/students')->with ('success', 'Class Deleted');
        return redirect('/students/?student_class_id='.$_GET['student_class_id'])->with('success', 'Class Deleted');
    }
}








