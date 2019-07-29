@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Session</h2>
    <form class="form-horizontal" id="student_class_students"  method="POST" action="{{ url('teachers/storestudentclass') }}"  novalidate>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('student_class') ? ' has-error' : '' }}">
                <label for="student_class" class="col-md-4 control-label">Student Class </label>
    
                <div class="col-md-6">
                 
                    <select name="student_class_ids">
                            
                        <option value="">----Select-----</option>
                        @foreach($student_classes as $student_class)
                        {{-- {{ dd($student_class)}} --}}
                            <option value="{{$student_class->id}}">{{$student_class->title}} {{$student_class->section}}</option>
                             
                        @endforeach
                        
                    </select>
{{-- {{dd($student_class)}} --}}
                    @if ($errors->has('student_class'))
                        <span class="help-block">
                            <strong>{{ $errors->first('student_class') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

           <div class="form-group"> 
            <input type="hidden"  name="teacher_id" value="{{$teacher_id}}">        
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