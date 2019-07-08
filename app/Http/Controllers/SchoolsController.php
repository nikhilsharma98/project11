<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Countary;
use App\State;

class SchoolsController extends Controller
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
        $schools = School::all();
        // dd($schools);
        return view('schools.index')->with('schools', $schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('schools.create');
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


        $schools = new School;
        $schools->name = $request->input('name');
        $schools->title = $request->input('title');
        $schools->date_of_opening = $request->input('date_of_opening');
        $schools->address = $request->input('address');
        $schools->city = $request->input('city');
        $schools->state_id = $request->input('state_id');
        $schools->countary_id = $request->input('countary_id');
        $schools->save();

        return redirect('/schools')->with ('success', 'Class created');
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
        $schools = School::find($id);
        $countries = Countary::all();
        $states = State::all();
        // dd($schools->all());
        return view('schools.edit')
        ->with('school', $schools)
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
        $schools = School::find($id);
        //   dd($request->all());
        $schools->name = $request->input('name');
        $schools->title = $request->input('title');
        $schools->date_of_opening = $request->input('date_of_opening');
        $schools->address = $request->input('address');
        $schools->city = $request->input('city');
        $schools->state_id = $request->input('state_id');
        $schools->countary_id = $request->input('countary_id');
        $schools->save();

          return redirect('/schools')->with ('success', 'Class Updated');
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
        $schools = School::find($id);
        //   dd($schools->all());
        $schools->delete();
        return redirect('/schools')->with ('success', 'Class Deleted');
    }
}
