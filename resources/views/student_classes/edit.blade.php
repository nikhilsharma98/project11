@extends('layouts.app')

@section('content')

<div class="col-md-12">
        <h2>Edit Student</h2>
    <form class="form-horizontal" id="form" action="{{ URL::route('student_classes.update', [$student_class->id]) }}" method="POST" novalidate>
        {{ csrf_field() }}
       
        <input type="hidden" name="_method" value="PUT"/>
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="col-md-4 control-label">Title</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" value="{{ $student_class->title }}" required autofocus>

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
                <input id="section" type="text" class="form-control" name="section" value="{{  $student_class->section }}" required autofocus>

                @if ($errors->has('section'))
                    <span class="help-block">
                        <strong>{{ $errors->first('section') }}</strong>
                    </span>
                @endif
            </div>
    </div>

        {{-- <div class="form-group{{ $errors->has('work_id') ? ' has-error' : '' }}">
            <label for="work_id" class="col-md-4 control-label"></label>

            <div class="col-md-6">
                <input id="work_id" type="hidden" class="form-control" name="work_id" value="{{ $student_class->id}}">

                @if ($errors->has('work_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('work_id') }}</strong>
                    </span>
                @endif
            </div>
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