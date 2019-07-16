@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Feedback</h2>
    <form class="form-horizontal" id="feedbacks"  method="POST" action="{{ route('feedbacks.store') }}"  novalidate>
        {{ csrf_field() }}

  
        <div class="form-group{{ $errors->has('month') ? ' has-error' : '' }}">
                <label for="month" class="col-md-4 control-label">Month</label>
    
                <div class="col-md-6">
                        <select name="month">
                                <option value="">----select----</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                    @if ($errors->has('month'))
                        <span class="help-block">
                            <strong>{{ $errors->first('month') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description" class="col-md-4 control-label">Description</label>
    
                <div class="col-md-6">
                    <input id="description" type="textarea" class="form-control" name="description" value="{{ old('description') }}" required autofocus>
    
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
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