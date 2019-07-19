@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h2>Home Work List</h2>
    {{-- @php
        $_GET['student_class_id'] = ''; 
    @endphp --}}
    
    
    <a href="" class="btn btn-success" role="button">Add Home Work</a> 
    
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
        
      
        </tr>
    </thead>
    <tbody>

    @foreach ($works  as $work)

        <tr>
            <td>{{ $work->id }}</td>
            <td>{{ $work->title}}</td>
            <td>{{ $work->description}}</td>
         
         
            <td>
                <a href="{{ route('works.edit', $work->id) }}" class="btn btn-default">
                    Edit
                </a>
                {{-- @php
                $_GET['student_class_id'] = ''; 
            @endphp --}}
              {{-- {{dd($_GET['student_class_id'])}} --}}
                <form class="form-horizontal pull-right" action="{{ URL::route('works.destroy', [$work->id]) }}" method="POST" >
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


