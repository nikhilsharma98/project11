@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Class Fee</h2>
    <form class="form-horizontal" id="student_fees" method="POST" action="{{ route('student_fees.store') }}" novalidate>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('class_fees') ? ' has-error' : '' }}">
            <label for="class_fees" class="col-md-4 control-label">Class Fees</label>
            <div class="col-md-6">
                <input id="class_fees" type="text" class="form-control" name="class_fees" value="{{ old('class_fees') }}">
                @if ($errors->has('class_fees'))
                    <span class="help-block">
                        <strong>{{ $errors->first('class_fees') }}</strong>
                    </span>
                @endif
            </div>
        </div>

       <div class="form-group"> 
            <input id="student_class_id" type="hidden"  name="student_class_id" value="{{ $_GET['student_class_id'] }}">        
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
<script src="http://cdnjs/app.user_validation.js/jquery.validate.min.js"></script>
    <script src="http://cdnjs/app.user_validation.js/additional-methods.min.js"></script>
    <script src="http://localhost/project/public/js/user_validation.js"></script>
@endsection




