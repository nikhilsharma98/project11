@extends('layouts.app')

@section('content')


<div class="col-md-12">
        <h2>School List</h2>
        
        <a href="{{ route('schools.create')}}" class="btn btn-success" role="button">Add School</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Title</th>
        <th scope="col">Date Of Opening</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">State ID</th>
        <th scope="col">Countary ID</th>
      </tr>
    </thead>
    <tbody>
          
     @foreach ($schools as $school)
        <tr>
            <td>{{ $school->id }}</td>
            <td>{{ $school->name }}</td>
            <td>{{ $school->title }}</td>
            <td>{{ $school->ddate_of_openingob }}</td>
            <td>{{ $school->address }}</td>
            <td>{{ $school->city }}</td>
            <td>{{ $school->state_id }}</td>
            <td>{{ $school->countary_id }}</td>
            <td>
                <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-default">
                    Edit
                </a>

                <form class="form-horizontal pull-right" action="{{ URL::route('schools.destroy', [$school->id]) }}" method="POST" >
                        {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button type="submit" class="btn btn-danger">
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