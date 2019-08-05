@extends('layouts.app')

@section('content')

<div class="col-md-12">
        <h2>Edit Class Fees</h2> 
 
    <form class="form-horizontal" id="student_fees" action="{{ URL::route('student_fees.update', [$student_fees->id]) }}" method="POST" novalidate>
        {{ csrf_field() }}
       
        <input type="hidden" name="_method" value="PUT"/>
        <div class="form-group{{ $errors->has('class_fees') ? ' has-error' : '' }}">
            <label for="class_fees" class="col-md-4 control-label">Class Fees</label>

            <div class="col-md-6">
                <input id="class_fees" type="text" class="form-control" name="class_fees" value="{{ $student_fees->class_fees }}" required autofocus>

                @if ($errors->has('class_fees'))
                    <span class="help-block">
                        <strong>{{ $errors->first('class_fees') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('student_class_id') ? ' has-error' : '' }}">
                <label for="student_class_id" class="col-md-4 control-label"></label>
    
                <div class="col-md-6">
                    <input id="student_class_id" type="hidden" class="form-control" name="student_class_id" value="{{ $student_fees->id}}">
    
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



