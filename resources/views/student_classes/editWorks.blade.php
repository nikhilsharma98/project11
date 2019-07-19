
@extends('layouts.app')
@section('content')
<div class="col-md-12">
    
    <h2>Home Work List</h2>
    
    {{-- @php
        $_GET['student_class_id'] = ''; 
    @endphp --}}
     {{-- {{dd($student_class)}} --}}   
    {{-- <a href="{{ route('works.create')}}" class="btn btn-success" role="button">Home Work</a> --}}
    {{-- <a href="{{ route('works.create', ['student_class_id' => $_GET['student_class_id']])}}" class="btn btn-success" role="button">Home Work</a> --}}

          {{-- <div class="row">
                <div class="col-sm-12"><strong>Student Class:</strong> {{ $student_class->title}}({{ $student_class->section}})</div>
                
          </div> --}}
    <table class="table table-striped">
        <thead>
            {{-- <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                                       
            </tr> --}}
           
        </thead>
        
        <tbody> 
            
              
                {{-- @foreach ($student_class->works()->get()  as $work)
           
                <tr>
                    <td>{{ $work->id }}</td>
                    <td><a href="{{ route('works.show', $student_class->id) }}" >{{ $work->title}}</a></td>
                    <td>{{ $work->description}}</td>
                    <td>{{ $work->created_at}}</td>
            
                    <td> --}}
                        {{-- @php dd($works) @endphp --}}
                {{-- @foreach ($works->get()  as $work)
                <tr>
                    <td>{{ $work->id }}</td>
                    <td>{{ $work->title}}</td>
                    <td>{{ $work->description}}</td>
                    <td>{{ $work->created_at}}</td>
                 
                 
                    <td> --}}
                        {{-- {{dd($student_class)}} --}}
                       
                         {{-- <a href="{{ route ('student_classes.editWork', $student_class->work_id->id) }}" class="btn btn-default">
                            Edit
                        </a> --}}

                       
                       
                
                    </td>
                                                                   
                </tr>
            @endforeach
           
        </tbody>
    </table>
</div>
@endsection


 