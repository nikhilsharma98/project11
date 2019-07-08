@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Session</h2>
    <form class="form-horizontal" id="form"  method="POST" action="{{ route('student_class_students.store') }}"  novalidate>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('student_class') ? ' has-error' : '' }}">
                <label for="student_class" class="col-md-4 control-label">Student Class </label>
    
                <div class="col-md-6">
                 
                    <select name="student_class" >
                            
                        <option value="">----Select-----</option>
                        @foreach($student_classes as $student_class)
                        {{-- {{ dd($student_class)}} --}}
                            <option value="{{$student_class->id}}">{{$student_class->title}} {{$student_class->section}}</option>
                             
                        @endforeach
                    </select>

                    @if ($errors->has('student_class'))
                        <span class="help-block">
                            <strong>{{ $errors->first('student_class') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group"> 
            <input id="student_id" type="hidden"  name="student_id" value="{{ $_GET['student_id'] }}">        
        </div>

        
        <div class="form-group{{ $errors->has('school_session_id') ? ' has-error' : '' }}">
                <label for="school_session_id" class="col-md-4 control-label">School Session </label>
    
                <div class="col-md-6">
                        <select name="school_session_id" >
                            
                                <option value="">----Select-----</option>
                                @foreach($school_sessions as $school_session)
                                
                                    <option value="{{$school_session->id}}">{{$school_session->session_year}} </option>
                                     
                                @endforeach
                        </select>             
    
                    @if ($errors->has('school_session_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('school_session_id') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
@endsection