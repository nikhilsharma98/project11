@extends('layouts.app')

@section('content')

<div class="col-md-12" >
        <h2>Teacher  List</h2>
    
        @php
        $_GET['student_class_id'] = ''; 
    @endphp
   
        <a href="{{ route('teachers.create')}}" class="btn btn-success" role="button">Add Teacher</a>
<table class="table table-striped">
    <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">Experience</th>
          <th scope="col">Aadhar ID</th>
          <th scope="col">DOB</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
       {{-- {{dd($teachers)}}   --}}
     
       
       
    @foreach ($teachers  as $teacher)
        {{-- {{dd($teachers)}} --}}
        <tr>
            <td>{{ $teacher->id }}</a></td>
            <td>{{ $teacher->first_name }}</td>
            <td>{{ $teacher->last_name }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->age }}</td>
            <td>{{ $teacher->experience }}</td>
            <td>{{ $teacher->aadhar_id }}</td>
            <td>{{ $teacher->dob }}</td>
            <td>{{ $teacher->gender }}</td>
            <td>{{ $teacher->address }}</td>

            
            <td>
            
                {{-- <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-default">
                    Edit
                </a> --}}
                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-default">
                    Edit
                </a>

                <form class="form-horizontal pull-right" action="{{ URL::route          ('teachers.destroy', [$teacher->id]) }}" method="POST" >
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
