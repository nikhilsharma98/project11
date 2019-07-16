@extends('layouts.app')

@section('content')

<div class="col-md-12" >
        <h2>Student  List</h2>
    
        <a href="{{ route('students.create')}}" class="btn btn-success" role="button">Add Student</a>
<table class="table table-striped">
    <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Father Name</th>
          <th scope="col">Mother Name</th>
          <th scope="col">Aadhar ID</th>
          <th scope="col">DOB</th>
          <th scope="col">DOA </th>
          <th scope="col">Photo</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th>Class</th>
          <th scope="col">City</th>
          <th scope="col">State ID</th>
          <th scope="col">Countary ID</th>
      </tr>
    </thead>
    <tbody>
       {{-- {{dd($students)}}   --}}
    @foreach ($students  as $student)
    @php
    $currentClass = $studentClass = $student->id;
    if ($student->student_class_students()->exists()) {
        $studentClass = $student->student_class_students()->get()->last()->student_class;
        $currentClass = $studentClass['title'] ." ". $studentClass['section'];
        
    }

    @endphp
        <tr>
            <td><a href="{{ route('works.index', $student->id) }}" >{{ $student->id }}</a></td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->father_name }}</td>
            <td>{{ $student->mother_name }}</td>
            <td>{{ $student->aadhar_id }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->doa }}</td>
            <td>{{ $student->photo }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $currentClass}}</td>
            {{-- <td>{{ $currentClass->student_classes->title }}
                    {{ $currentClass->student_classes->section }}</td> --}}
         
            <td>{{ $student->city }}</td>
            <td>{{ $student->state->name }}</td>
            <td>{{ $student->countary->name }}</td>
            
            <td>
                
                
                

                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-default">
                    Edit
                </a>

                <form class="form-horizontal pull-right" action="{{ URL::route('students.destroy', [$student->id]) }}" method="POST" >
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

