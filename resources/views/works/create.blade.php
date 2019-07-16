@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Home Work</h2>
    <form class="form-horizontal" id="works"  method="POST" action="{{ route('works.store') }}"  novalidate>
        {{ csrf_field() }}

  
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title" class="col-md-4 control-label">Title </label>
    
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
    
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description" class="col-md-4 control-label">Description</label>

            <div class="col-md-6">
                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        {{-- <div class="form-group"> 
            <input id="student_class_id" type="hidden"  name="student_class_id" value="{{ $_GET['student_class_id'] }}">        
        </div> --}}
        <div class="form-group"> 
            <input type="hidden"  name="student_class_id" value="{{$student_class_id}}">        
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