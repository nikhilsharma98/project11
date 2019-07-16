@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Guardian</h2>
    <form class="form-horizontal"  id="guardians" method="POST" action="{{ route('guardians.store') }}" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}

       

         <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
                <label for="father_name" class="col-md-4 control-label">Father Name</label>
    
                <div class="col-md-6">
                    <input id="father_name" type="text" class="form-control" name="father_name" value="{{ old('father_name') }}" required autofocus>
    
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
                    <input id="father_image" type="file" class="form-control" name="father_image" value="{{ old('father_image') }}" required autofocus>
    
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
                    <input id="father_occupation" type="text" class="form-control" name="father_occupation" value="{{ old('father_occupation') }}"  required autofocus>
    
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
                <input id="mother_name" type="text" class="form-control" name="mother_name" value="{{ old('mother_name') }}" required autofocus>

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
                <input id="mother_image" type="file" class="form-control" name="mother_image" value="{{ old('mother_image') }}" required autofocus>

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
                <input id="mother_occupation" type="text" class="form-control" name="mother_occupation" value="{{ old('mother_occupation') }}"  required autofocus>

                @if ($errors->has('mother_occupation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mother_occupation') }}</strong>
                    </span>
                @endif
            </div>
    </div>

    <div class="form-group"> 
        <input id="student_id" type="hidden"  name="student_id" value="{{ $_GET['student_id'] }}">        
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