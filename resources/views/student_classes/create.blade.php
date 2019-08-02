@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Class</h2>
    <form class="form-horizontal" id="form" method="POST" action="{{ route('student_classes.store') }}" novalidate>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="col-md-4 control-label">Title</label>
            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
            <label for="section" class="col-md-4 control-label">Section</label>

            <div class="col-md-6">
                <input id="section" type="text" class="form-control" name="section" value="{{ old('section') }}" >

                @if ($errors->has('section'))
                    <span class="help-block">
                        <strong>{{ $errors->first('section') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        {{-- <div class="form-group"> 
            <input id="work_id" type="hidden"  name="work_id" value="{{ $_GET['work_id'] }}">        
        </div> --}}
        {{-- <div class="form-group"> 
                <input type="hidden"  name="student_id" value="{{$student_id}}">        
            </div> --}}
       

        <div class="form-group"> 
            <input id="teacher_id" type="hidden"  name="teacher_id" value="{{ $_GET['teacher_id'] }}">        
        </div>

        {{-- <div class="form-group"> 
                <input id="student_id" type="hidden"  name="student_id" value="{{ $_GET['student_id'] }}">        
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
<script src="http://cdnjs/app.user_validation.js/jquery.validate.min.js"></script>
    <script src="http://cdnjs/app.user_validation.js/additional-methods.min.js"></script>
    <script src="http://localhost/project/public/js/user_validation.js"></script>
@endsection




