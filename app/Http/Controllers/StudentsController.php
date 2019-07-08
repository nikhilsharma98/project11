<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Student;
use App\Countary;
use App\State;
use Illuminate\Support\Facades\Storage;


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
        $students = Student::all();
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
        $states = State::all();
        $countries = Countary::all();
        // dd($countries);
         return view('students.create')
         ->with('states', $states)
         ->with('countries', $countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
          $students->save();
  
          return redirect('/students')->with ('success', 'Class created');
        
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

        $students = Student::find($id); 
        $countries = Countary::all();
        $states = State::all();
        // dd($states->all());
        

        return view('students.edit')
        ->with('student', $students)
        ->with('countries', $countries)
        ->with('states', $states);
        
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

          if($request->hasfile('photo')){
                $students->photo = $imageName;
            }
            
          $students->save();
        
        return redirect('/students')->with ('success', 'Class Updated');
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
        return redirect('/students')->with ('success', 'Class Deleted');
    }
}








