@extends('layouts.app')

@section('content')

<div class="col-md-12">
        <h2>Edit Home Work</h2>
        {{-- {{dd($school_session)}} --}}
        <form class="form-horizontal" action="{{ URL::route('works.update', [$work->id]) }}" method="POST" novalidate>
   
        {{ csrf_field() }}
       
        <input type="hidden" name="_method" value="PUT"/>
     
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title" class="col-md-4 control-label">Title</label>
    
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" value="{{ $work->title}}" required autofocus>
    
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
                <input id="description" type="text" class="form-control" name="description" value="{{ $work->description}}" required autofocus>

                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('student_class_id') ? ' has-error' : '' }}">
            <label for="student_class_id" class="col-md-4 control-label"></label>

            <div class="col-md-6">
                <input id="student_class_id" type="hidden" class="form-control" name="student_class_id" value="{{ $work->id}}">

                @if ($errors->has('student_class_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('student_class_id') }}</strong>
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