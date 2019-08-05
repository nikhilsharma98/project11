@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h2>School Session List</h2>
    
    <a href="{{ route('school_sessions.create')}}" class="btn btn-success" role="button">Add Session</a>   
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
          <th scope="col">Session Year</th>
        
       
        </tr>
    </thead>
    <tbody>

    @foreach ($school_sessions  as $school_session)

        <tr>
            <td>{{ $school_session->id }}</td>
            <td>{{ $school_session->session_year}}</td>
         
            <td>
                <a href="{{ route('school_sessions.edit', $school_session->id) }}" class="btn btn-default">
                    Edit
                </a>

                <form class="form-horizontal pull-right" action="{{ URL::route('school_sessions.destroy', [$school_session->id]) }}" method="POST" >
                        {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">
                        Delete
                    </button>
                </form>
               
            
            </td>
        </tr>
    @endforeach


    </tbody>
  </table>
</div>
@endsection


