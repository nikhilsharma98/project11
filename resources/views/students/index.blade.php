@extends('layouts.app')

@section('content')
<div class="col-md-12" >
        <h2>Student  List</h2>

        @php
        $_GET['student_class_id'] = ''; 
    @endphp
    
        <a href="{{ route('students.create', ['student_class_id' => $_GET['student_class_id']])}}" class="btn btn-success" role="button">Add Student</a>
     
<table class="table table-striped">
    <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          {{-- <th scope="col">Father Name</th>
          <th scope="col">Mother Name</th>
          <th scope="col">Aadhar ID</th>
          <th scope="col">DOB</th>
          <th scope="col">DOA </th>
          <th scope="col">Photo</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th> --}}
          <th>Teacher Name</th>
          <th>Student Class</th>
          {{-- <th scope="col">City</th>
          <th scope="col">State ID</th>
          <th scope="col">Countary ID</th> --}}
      </tr>
    </thead>
    <tbody>
       
    @foreach ($students  as $student)
        {{-- {{dd($students)}} --}}
        
    @php
    
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
            {{-- <td>{{ $student->father_name }}</td>
            <td>{{ $student->mother_name }}</td>
            <td>{{ $student->aadhar_id }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->doa }}</td>
            <td>{{ $student->photo }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->address }}</td> --}}
            <td>{{ $student->studentClass->teacher->first_name }}
                {{ $student->studentClass->teacher->last_name }}</td>
                  {{-- <td>@foreach($student->studentClass as $studentClass)
                      {{ $studentClass->teacher->first_name }}
                {{ $studentClass->teacher->last_name }}@endforeach</td> --}}
                {{-- <td>
                    @foreach ($student->studentClass as $studentClass)
                        {{ $studentClass->teacher->first_name }}{{ $studentClass->teacher->last_name }}
                    @endforeach 
                </td> --}}

        
                <td>{{ $currentClass }}</td>
            
                {{-- <td>{{ $student->city }}</td>
                <td>{{ $student->state->name }}</td>
                <td>{{ $student->countary->name }}</td> --}}
            <td>
            
                <input type="hidden" id="student_id" name="student_id" value="{{ $student->id }}">
                <button type="button" id="{{ $student->id }}" class="btn btn-info btn-lg btn_show" data-toggle="modal" data-target="#detailshow">Show Detail</button>
                

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
{{-- <td id="sid"></td> --}}

<!-- Modal -->
<div id="modalViewDetails" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title table table-stripped"><strong>Student List</strong></h4>
        </div>
        <div class="modal-body table table-stripped"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>
<script src="{{asset('js/ajax.js')}}"></script>
<script src="ajax.js"></script>


@endsection


