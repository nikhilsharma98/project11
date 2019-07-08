@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h2>Feedback List</h2>
    
    <a href="{{ route('feedbacks.create', ['student_id' => $_GET['student_id']])}}" class="btn btn-success" role="button">Add Feedback</a>   
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
          <th scope="col">Month</th>
          <th scope="col">Description</th>
        
       
        </tr>
    </thead>
    <tbody>

    @foreach ($feedbacks as $feedback)

        <tr>
            <td>{{ $feedback->id }}</td>
            <td>{{ $feedback->month}}</td>
            <td>{{ $feedback->description}}</td>
        
            
            <td>
                <a href="{{ route('feedbacks.edit', $feedback->id) }}" class="btn btn-default">
                    Edit
                </a>

                <form class="form-horizontal pull-right" action="{{ URL::route('feedbacks.destroy', ['id' => $feedback->id, 'student_id' => $_GET['student_id']]) }}" method="POST" >
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

