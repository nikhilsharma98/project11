@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Teacher</h2>
    <form class="form-horizontal" id="students" method="POST" action="{{ route('teachers.store') }}" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}

         <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-4 control-label">First Name</label>
    
                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
    
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name" class="col-md-4 control-label">Last Name</label>
    
                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
    
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
        </div>



{{-- 
        <div class="form-group{{ $errors->has('student_class') ? ' has-error' : '' }}">
            <label for="student_class" class="col-md-4 control-label">Student Class</label>

            <div class="col-md-6">
                <input id="student_class" type="text" class="form-control" name="student_class" value="{{ old('student_class') }}" required autofocus>

                <select name="student_class" >
                            
                    <option value="">----Select-----</option>
                    @foreach($student_classes as $student_class)
                    {{ dd($student_class)}}
                        <option value="{{$student_class->id}}">{{$student_class->title}} {{$student_class->section}}</option>
                        {{ dd($student_class)}}
                    @endforeach
                </select>

                @if ($errors->has('student_class'))
                    <span class="help-block">
                        <strong>{{ $errors->first('student_class') }}</strong>
                    </span>
                @endif
            </div>
    </div> --}}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Email</label>
    
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                <label for="age" class="col-md-4 control-label">Age</label>
    
                <div class="col-md-6">
                    <input id="age" type="number" class="form-control" name="age" value="{{ old('age') }}" required autofocus>
    
                    @if ($errors->has('age'))
                        <span class="help-block">
                            <strong>{{ $errors->first('age') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                <label for="experience" class="col-md-4 control-label">Experience</label>
    
                <div class="col-md-6">
                    <input id="experience" type="number" class="form-control" name="experience" value="{{ old('experience') }}" required autofocus>
    
                    @if ($errors->has('experience'))
                        <span class="help-block">
                            <strong>{{ $errors->first('experience') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('aadhar_id') ? ' has-error' : '' }}">
                <label for="aadhar_id" class="col-md-4 control-label">Aadhar ID</label>
    
                <div class="col-md-6">
                    <input id="aadhar_id" type="number" class="form-control" name="aadhar_id" value="{{ old('aadhar_id') }}" required autofocus>
    
                    @if ($errors->has('aadhar_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('aadhar_id') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                <label for="dob" class="col-md-4 control-label">DOB</label>
    
                <div class="col-md-6">
                    <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}"  required autofocus>
    
                    @if ($errors->has('dob'))
                        <span class="help-block">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

    

        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                <label for="gender" class="col-md-4 control-label">Gender</label>
    
                <div class="col-md-6">
                    <input id="gender" type="radio" name="gender" value="male" Checked>Male
                    <input id="gender" type="radio" name="gender" value="female">Female
    
                    @if ($errors->has('gender'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="address" class="col-md-4 control-label">Address</label>
    
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
    
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group"> 
            <input id="student_class_id" type="hidden"  name="student_class_id" value="{{ $_GET['student_class_id'] }}">        
        </div>

        {{-- <div class="form-group"> 
                <input id="work_id" type="hidden"  name="work_id" value="{{ $_GET['work_id'] }}">        
            </div> --}}

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