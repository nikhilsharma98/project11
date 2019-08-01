@extends('layouts.app')

@section('content')

<div class="col-md-12" >
        <h2>Student  List</h2>
    

        {{-- @php
        $_GET['teacher_id'] = ''; 
    @endphp --}}
        
   
        <a href="{{ route('students.create', ['teacher_id' => $_GET['teacher_id']])}}" class="btn btn-success" role="button">Add Student</a>
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
          <th>Teacher Name</th>
          <th>Class</th>
          <th scope="col">City</th>
          <th scope="col">State ID</th>
          <th scope="col">Countary ID</th>
      </tr>
    </thead>
    <tbody>
       {{-- {{dd($students)}}   --}}
     
       
       
    @foreach ($students  as $student)
        {{-- {{dd($students)}} --}}
    @php
    // $student_class = '';
    $currentClass = $studentClass = $student->studentClassstudents;
    if ($student->studentClassstudents()->exists()) { 
        $studentClass = $student->studentClassstudents()->get()->last()->studentClass;
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
            <td>{{ $student->teacher->first_name }}
                {{ $student->teacher->last_name }}</td>
            <td>{{ $currentClass }}</td>
            {{-- <td>
                @foreach ($student->student_class as $student_class)
                    {{ $student_class->title }}{{ $student_class->section }}
                @endforeach 
            </td> --}}
            <td>{{ $student->city }}</td>
            <td>{{ $student->state->name }}</td>
            <td>{{ $student->countary->name }}</td>
            
            <td>
                
                
                

                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-default">
                    Edit
                </a>

                <form class="form-horizontal pull-right" action="{{ URL::route('students.destroy', ['id' => $student->id, 'teacher_id' => $_GET['teacher_id']]) }}" method="POST" >
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


