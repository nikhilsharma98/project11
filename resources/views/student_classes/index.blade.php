@extends('layouts.app')

@section('content')


<div class="col-md-12">
       <h2>Classes List</h2>
  
              @php
              $_GET['teacher_id'] = ''; 
          @endphp
        <a href="{{ route('student_classes.create', ['teacher_id' => $_GET['teacher_id']])}}" class="btn btn-success" role="button">Create Class</a> 
 
        
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        {{-- <th scope="col">Teacher Name</th> --}}
        <th scope="col">Class Title</th>
        <th scope="col">Class Section</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
  <tbody> 
     @foreach ($student_classes as $student_class)
     {{-- {{dd($student_classes)}} --}}
     {{-- @php
     echo '<pre>';
       print_r($student_classes);
       die();
       @endphp --}}
        <tr>
            
            
            <td>{{ $student_class->id }}</td>
            {{-- <td>{{ $student_class->teacher->first_name }}
                {{ $student_class->teacher->last_name }}</td> --}}

            <td><a href="{{ route('student_classes.show', $student_class->id) }}" >{{ $student_class->title }}</a></td>
         
            <td>{{ $student_class->section }}</td>
            <td>
                <a href="{{ route('student_classes.edit', $student_class->id) }}" class="btn btn-default">
                    Edit
                </a>
                  
                <form class="form-horizontal pull-right" action="{{ URL::route('student_classes.destroy', ['id' => $student_class->id, 'teacher_id' => $_GET['teacher_id']]) }}" method="POST" >
                        {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">
                        Delete  
                    </button>
                </form>
{{-- 
                <form class="form-horizontal pull-right" action="{{ URL::route('student_classes.destroy', [$student_class->id]) }}" method="POST" >
                  {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE"/>
              <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">Delete</button>
          </form> --}}
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

