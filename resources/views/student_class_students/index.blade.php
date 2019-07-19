@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h2>Session List</h2>
    {{-- {{dd($_GET['student_id'])}} --}}
    <a href="{{ route('student_class_students.create', ['student_id' => $_GET['student_id']])}}" class="btn btn-success" role="button">Update Student Session</a>        
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
          <th scope="col">Student Class</th>
          <th scope="col">Student Name</th>
          
          <th scope="col">School Session </th>
       
      </tr>
    </thead>
    <tbody>
        @php   
            // echo '<pre>';
            //     print_r($student_class_students)->;
            //     die();
        @endphp
         {{-- {{dd($student_class_students)}} --}}
        @php
        if(!empty($student_class_students)){
        @endphp
            @foreach ($student_class_students  as $student_class_student)
                <tr>
                    <td>{{ $student_class_student->id }}</td>
                    <td>{{ $student_class_student->student_class->title}} 
                        {{ $student_class_student->student_class->section}}</td>
                    <td>{{ $student_class_student->student->first_name}} 
                    {{$student_class_student->student->last_name}}</td>
                    <td>{{ $student_class_student->school_session->session_year }}</td>
                    <td>
                        <a href="{{ route('student_class_students.edit', $student_class_student->id) }}" class="btn btn-default">
                            Edit
                        </a>

                        <form class="form-horizontal pull-right" action="{{ URL::route('student_class_students.destroy', ['id' => $student_class_student->id, 'student_id' => $_GET['student_id']]) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE"/>
                            <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">Delete</button>
                        </form>
                    
                    
                    </td>
                </tr>
            @endforeach
        @php
        }
        @endphp


    </tbody>
  </table>
</div>
@endsection


