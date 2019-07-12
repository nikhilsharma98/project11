@extends('layouts.app')

@section('content')

<div class="col-md-12">
        <h2>Edit Student</h2>
    <form class="form-horizontal" form="id" id="form" action="{{ URL::route('student_class_students.update', [$student_class_student->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}
       
        <input type="hidden" name="_method" value="PUT"/>
        <div class="form-group{{ $errors->has('student_class') ? ' has-error' : '' }}">
                <label for="student_class" class="col-md-4 control-label">Student Class</label>
    
                <div class="col-md-6">


                    <select name="student_class" >
                        <option value="">-----Select-----</option>
                        
                        @foreach($student_classes as $student_class)
                      
                             <option value="{{$student_class->id}}" @if ($student_class->id == $student_class_student->student_class_id) {{"selected"}} @endif>{{$student_class->title}} {{$student_class->section}}</option>

                        @endforeach
                    </select>

                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('student_class') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
            <label for="student_id" class="col-md-4 control-label"></label>

            <div class="col-md-6">
                <input id="student_id" type="hidden" class="form-control" name="student_id" value="{{ $student_class_student->id}}">

                @if ($errors->has('student_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('student_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('school_session_id') ? ' has-error' : '' }}">
                <label for="school_session_id" class="col-md-4 control-label">School Session </label>
    
                <div class="col-md-6">

                        <select name="school_session_id" >
                            
                                <option value="">----Select-----</option>
                                @foreach($school_sessions as $school_session)
                                
                                    <option value="{{$school_session->id}}" @if ($school_session->id == $student_class_student->school_session_id) {{"selected"}} @endif>{{$school_session->session_year}} </option>
                                     
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