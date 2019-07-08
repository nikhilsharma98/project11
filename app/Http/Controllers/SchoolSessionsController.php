<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolSession;

class SchoolSessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        //
        $schoolSessions = SchoolSession::all();
        return view('school_sessions.index')->with('school_sessions', $schoolSessions);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('school_sessions.create');
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
        $schoolSessions = new SchoolSession;
        $schoolSessions->session_year = $request->input('session_year');
        
        $schoolSessions->save();

        return redirect('/school_sessions')->with ('success', 'Class created');

        
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
        $schoolSession = SchoolSession::find($id);
        return view('school_sessions.edit')->with('school_session', $schoolSession);

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
        $schoolSessions = SchoolSession::find($id);
        
        $schoolSessions->session_year = $request->input('session_year');
      
        $schoolSessions->save();
        return redirect('/school_sessions')->with ('success', 'Class Updated');
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
        $schoolSessions = SchoolSession::find($id);
        $schoolSessions->delete();
        return redirect('/school_sessions')->with ('success', 'Class Deleted');
    }
}
