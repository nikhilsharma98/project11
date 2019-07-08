@extends('layouts.app')

@section('content')

<div class="col-md-12">
        <h2>Edit Student</h2>
        <a href="{{ route('student_class_students.index', ["student_id"=> $student->id ]) }}" class="btn btn-default" >
            Class Details
        </a> 
          
        <a href="{{ route('feedbacks.index', ["student_id"=> $student->id ]) }}" class="btn btn-default" >
            feedback
        </a> 
        <a href="{{ route('guardians.index', ["student_id"=> $student->id ]) }}" class="btn btn-default" >
            Guardian
        </a>

    <form class="form-horizontal" action="{{ URL::route('students.update', [$student->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}
       
        <input type="hidden" name="_method" value="PUT"/>
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-4 control-label">First Name</label>
    
                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $student->first_name}}" required autofocus>
    
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
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $student->last_name }}" required autofocus>
    
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Email</label>
    
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ $student->email }}" required autofocus>
    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
                <label for="father_name" class="col-md-4 control-label">Father Name</label>
    
                <div class="col-md-6">
                    <input id="father_name" type="text" class="form-control" name="father_name" value="{{  $student->father_name }}" required autofocus>
    
                    @if ($errors->has('father_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('father_name') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
                <label for="mother_name" class="col-md-4 control-label">Mother Name</label>
    
                <div class="col-md-6">
                    <input id="mother_name" type="text" class="form-control" name="mother_name" value="{{  $student->mother_name }}" required autofocus>
    
                    @if ($errors->has('mother_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mother_name') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('aadhar_id') ? ' has-error' : '' }}">
                <label for="aadhar_id" class="col-md-4 control-label">Aadhar ID</label>
    
                <div class="col-md-6">
                    <input id="aadhar_id" type="number" class="form-control" name="aadhar_id" value="{{  $student->aadhar_id }}" required autofocus>
    
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
                    <input id="dob" type="date" class="form-control" name="dob" value="{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $student->dob)->format('Y-m-d') }}" required autofocus>
    
                    @if ($errors->has('dob'))
                        <span class="help-block">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('doa') ? ' has-error' : '' }}">
                <label for="doa" class="col-md-4 control-label">DOA</label>
    
                <div class="col-md-6">
                    <input id="doa" type="date" class="form-control" name="doa" value="{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $student->doa)->format('Y-m-d') }}" required autofocus>
    
                    @if ($errors->has('doa'))
                        <span class="help-block">
                            <strong>{{ $errors->first('doa') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                <label for="photo" class="col-md-4 control-label">Photo</label>
    
                <div class="col-md-6">
                    
                    <input id="photo" type="file" class="form-control" name="photo" required autofocus>
                <img style="width:50%;height:70px;" src="/images/{{$student->photo}}" />
                    
                    @if ($errors->has('photo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('photo') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                <label for="gender" class="col-md-4 control-label">Gender</label>
    
                <div class="col-md-6">
                    <input id="gender" type="radio" name="gender" value="{{ $student->gender }}" Checked>Male
                    <input id="gender" type="radio" name="gender" value="{{ $student->gender }}"  >Female
    
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
                    <input id="address" type="text" class="form-control" name="address" value="{{  $student->address }}" required autofocus>
    
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                <label for="city" class="col-md-4 control-label">City</label>
    
                <div class="col-md-6">
                    <input id="city" type="text" class="form-control" name="city" value="{{ $student->city}}" required autofocus>
    
                    @if ($errors->has('city'))
                        <span class="help-block">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('state_id') ? ' has-error' : '' }}">
                <label for="state_id" class="col-md-4 control-label">State</label>
    
                <div class="col-md-6">

                        <select name="state_id" >
                                <option value="">----Select-----</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}" @if ($state->id == $student->state_id) {{"selected"}} @endif>{{$state->name}}</option>
                                @endforeach
                              
                               
                        </select>
    
                    @if ($errors->has('state_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('state_id') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('countary_id') ? ' has-error' : '' }}">
                <label for="countary_id" class="col-md-4 control-label">Countary</label>
    
                <div class="col-md-6">
                  
                        <select name="countary_id" >
                                <option value="">-----Select-----</option>
                                @foreach($countries as $country)
                                     <option value="{{$country->id}}" @if ($country->id == $student->countary_id) {{"selected"}} @endif>{{$country->name}}</option>
                                @endforeach
                        </select>

                
    
                    @if ($errors->has('countary_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('countary_id') }}</strong>
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



