@extends('layouts.app')

@section('content')


<div class="col-md-12">
        <h2>Guardian List</h2>
        {{-- {{dd($_GET['student_id'])}} --}}
       <a href="{{ route('guardians.create', ['student_id' => $_GET['student_id']])}}" class="btn btn-success" role="button">Add Guardian</a> 

     

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        
        <th scope="col">Father Name</th>
        <th scope="col">Father Image</th>
        <th scope="col">Father Occupation</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Mother Image</th>
        <th scope="col">Mother Occupation</th>
        
      </tr>
    </thead>
    <tbody>
          
     @foreach ($guardians as $guardian)
        <tr>
            <td>{{ $guardian->id }}</td>
            <td>{{ $guardian->father_name }}</td>
            <td>{{ $guardian->father_image }}</td>
            <td>{{ $guardian->father_occupation }}</td>
            <td>{{ $guardian->mother_name }}</td>
            <td>{{ $guardian->mother_image }}</td>
            <td>{{ $guardian->mother_occupation }}</td>
            
            <td>

           
                
                <a href="{{ route('guardians.edit', $guardian->id) }}" class="btn btn-default">
                    Edit
                </a>

                {{-- <a href="{{ route('student_class_students.index', ["student_id"=> $student->id ]) }}" class="btn btn-default" >
                  Class Details
              </a>  --}}
                
                <form class="form-horizontal pull-right" action="{{ URL::route('guardians.destroy', ['id' => $guardian->id, 'student_id' => $_GET['student_id']]) }}" method="POST" >
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

    


