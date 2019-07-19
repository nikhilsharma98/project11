
@extends('layouts.app')
@section('content')
<div class="col-md-12">
    
    <h2>Home Work List1</h2>
    
    {{-- @php
        $_GET['student_class_id'] = ''; 
    @endphp --}}
    

    <a href=" {{ url('works/create/' . $student_class->id)}}" class="btn btn-success" role="button">Home Work</a>

          <div class="row">
                <div class="col-sm-12"><strong>Student Class:</strong> {{ $student_class->title}}({{ $student_class->section}})</div>
                @php($_session) @endphp
          </div>
    <table class="table table-striped" id="form">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                                       
            </tr>
           
        </thead>
        
        <tbody>                                                                                                                         
             {{-- {{dd($student_class)}} --}}
            @foreach ($student_class->works()->get()  as $work)
           
                <tr>
                    <td>{{ $work->id }}</td>
                    <td><a href="{{ route('works.show', $work->id) }}" >{{ $work->title}}</a></td>
                    <td>{{ $work->description}}</td>
                    <td>{{ $work->created_at}}</td>
            
                    <td>
                        {{-- {{dd($student_class)}} --}}
                        {{-- <a href="{{ route ('editworks.workEdit', $student_class->id) }}" class="btn btn-default">
                            Edit
                        </a> --}}
                        <a href="{{ route ('works.edit', $work->id) }}" class="btn btn-default">
                                Edit
                            </a>
                     
                    
                        {{-- <form class="form-horizontal pull-right" action="{{ URL::route('student_classes.destroyWorks', ['id' => $student_class->id, 'work_id' => $_GET['work_id']]) }}" method="POST" >
                        {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button type="submit" class="btn btn-danger" name="button" onclick="return confirm('Are you sure to delete this record?')">
                        Delete
                    </button>
                </form> --}}


                {{-- {{dd($student_class)}} --}}
                <form class="form-horizontal pull-right" id="form" action="{{ URL::route('works.destroy', [$work->id]) }}" method="POST" >
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


