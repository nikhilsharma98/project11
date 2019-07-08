@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <h2>Create Class</h2>
    <form class="form-horizontal"  id="form" method="POST" action="{{ route('schools.store') }}" novalidate>
        {{ csrf_field() }}

         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>
    
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
    
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title" class="col-md-4 control-label">Title</label>
    
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
    
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        

        <div class="form-group{{ $errors->has('date_of_opening') ? ' has-error' : '' }}">
                <label for="date_of_opening" class="col-md-4 control-label">Date Of Opening</label>
    
                <div class="col-md-6">
                    <input id="date_of_opening" type="date" class="form-control" name="date_of_opening" value="{{ old('date_of_opening') }}"  required autofocus>
    
                    @if ($errors->has('date_of_opening'))
                        <span class="help-block">
                            <strong>{{ $errors->first('date_of_opening') }}</strong>
                        </span>
                    @endif
                </div>
        </div>


        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label for="address" class="col-md-4 control-label">Address</label>

            <div class="col-md-6">
                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
    </div>

    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-md-4 control-label">City</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif
            </div>
    </div>

    <div class="form-group{{ $errors->has('state_id') ? ' has-error' : '' }}">
            <label for="state_id" class="col-md-4 control-label">State</label>

            <div class="col-md-6">
                    <select name="state_id">
                            <option value="">----Select-----</option>
                            <option value="1" >Haryana</option>
                            <option value="2">Assam</option>
                            <option value="3">GOA</option>
                            <option value="4">Himachal Pradesh</option>
                            <option value="5">Jammu & Kashmir</option>
                            <option value="6">Maharashtra</option>
                           
                          </select>
                          

                @if ($errors->has('state_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('state_id') }}</strong>
                    </span>
                @endif
            </div>
    </div>

    <div class="form-group{{ $errors->has('countary_id') ? ' has-error' : '' }}">
            <label for="countary_id" class="col-md-4 control-label">Countary</label>

            <div class="col-md-6">
                    <select name="countary_id">
                            <option value="">-----Select-----</option>
                            <option value="1">USA</option>
                            <option value="2">UAE</option>
                            <option value="3">India</option>
                            <option value="4">Australia</option>
                            <option value="5">New zeeland'</option>
                            <option value="6">Japan</option>
                           
                    </select>
                       
                        

                @if ($errors->has('countary_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('countary_id') }}</strong>
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