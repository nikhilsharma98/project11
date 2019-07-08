@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Session</h2>
    <form class="form-horizontal" id="form"  method="POST" action="{{ route('school_sessions.store') }}"  novalidate>
        {{ csrf_field() }}

  
        <div class="form-group{{ $errors->has('session_year') ? ' has-error' : '' }}">
                <label for="session_year" class="col-md-4 control-label">Session Year</label>
    
                <div class="col-md-6">
                    <input id="year" type="text" class="form-control" name="session_year" value="{{ old('year') }}" required autofocus>
    
                    @if ($errors->has('session_year'))
                        <span class="help-block">
                            <strong>{{ $errors->first('session_year') }}</strong>
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