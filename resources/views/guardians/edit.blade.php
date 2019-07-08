@extends('layouts.app')

@section('content')

<div class="col-md-12">
        <h2>Edit Guardian</h2>
    <form class="form-horizontal"  action="{{ URL::route('guardians.update', [$guardian->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}
        
    

        <input type="hidden" name="_method" value="PUT"/>
        
        <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
            <label for="father_name" class="col-md-4 control-label">Father Name</label>
            <div class="col-md-6">
                <input id="father_name" type="text" class="form-control" name="father_name" value="{{ $guardian->father_name}}">
                @if ($errors->has('father_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('father_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('father_image') ? ' has-error' : '' }}">
            <label for="father_image" class="col-md-4 control-label">Father Image</label>
            <div class="col-md-6">
                <input id="father_image" type="file" class="form-control" name="father_image">
                <img style="width:50%;height:70px;" src="/guardian/{{$guardian->father_image}}" />
                @if ($errors->has('father_image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('father_image') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    

        <div class="form-group{{ $errors->has('father_occupation') ? ' has-error' : '' }}">
            <label for="father_occupation" class="col-md-4 control-label">Father Occupation</label>
            <div class="col-md-6">
                <input id="father_occupation" type="text" class="form-control" name="father_occupation" value="{{ $guardian->father_occupation}}">
                @if ($errors->has('father_occupation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('father_occupation') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        

        <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
            <label for="mother_name" class="col-md-4 control-label">Mother Name</label>
            <div class="col-md-6">
                <input id="mother_name" type="text" class="form-control" name="mother_name" value="{{ $guardian->mother_name}}">
                @if ($errors->has('mother_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mother_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('mother_image') ? ' has-error' : '' }}">
            <label for="mother_image" class="col-md-4 control-label">Mother Image</label>
            <div class="col-md-6">
                <input id="mother_image" type="file" class="form-control" name="mother_image">
                <img style="width:50%;height:70px;" src="/guardian/{{$guardian->mother_image}}" />
                @if ($errors->has('mother_image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mother_image') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('mother_occupation') ? ' has-error' : '' }}">
            <label for="mother_occupation" class="col-md-4 control-label">Mother Occupation</label>
            <div class="col-md-6">
                <input id="mother_occupation" type="text" class="form-control" name="mother_occupation" value="{{ $guardian->mother_occupation}}">
                @if ($errors->has('mother_occupation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mother_occupation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
            <label for="student_id" class="col-md-4 control-label"></label>

            <div class="col-md-6">
                <input id="student_id" type="hidden" class="form-control" name="student_id" value="{{ $guardian->id}}">

                @if ($errors->has('student_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('student_id') }}</strong>
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