@extends('layouts.app')

@section('content')


<div class="col-md-12">
        <h2>List Class Fees</h2> 
        {{-- @php
        $_GET['student_class_id'] = ''; 
    @endphp  --}}
        <a href="{{ route('student_fees.create', ['student_class_id' => $_GET['student_class_id']])}}" class="btn btn-success" role="button">Create Class</a> 
 
        
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Student Fees</th>
        <th scope="col">Student Class</th>
  
      </tr>
    </thead>
  <tbody> 
     @foreach ($student_fees as $student_fee)
                {{-- {{dd($student_fees)}} --}}
        <tr>
                {{-- <td><a href="{{ route('teachers.show', $teacher->id) }}" >{{ $teacher->first_name }}</a></td> --}}
            
            <td>{{ $student_fee->id }}</td>
            <td><a href="{{ route('student_fees.show', $student_fee->id) }}" >{{ $student_fee->class_fees }}</a></td>
            <td>{{ $student_fee->studentClass->title }}
                    {{ $student_fee->studentClass->section }}</td>
            {{-- <td>
                @foreach ($student_fee->StudentClass as $StudentClass)
                    {{ $student_fee->studentClass->title}} {{ $student_fee->studentClass->section}}
                @endforeach
            </td> --}}
          
            <td>
                <a href="{{ route('student_fees.edit', $student_fee->id) }}" class="btn btn-default">
                    Edit
                </a>
             

                <form class="form-horizontal pull-right" action="{{ URL::route('student_fees.destroy', ['id' => $student_fee->id, 'student_class_id' => $_GET['student_class_id']]) }}" method="POST" >
                  {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE"/>
              <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">Delete</button>
          </form>

            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

