

@extends('layouts.app')
@section('content')
<div class="col-md-12">
    
    {{-- <h2>Home Work List</h2> --}}
    
        {{-- @php
            $_GET['student_class_id'] = ''; 
        @endphp --}}
    
        <a href="" class="" role="button"></a>
     
    {{-- <table class="table table-striped"> --}}
        <thead>
            {{-- <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                         
            </tr> --}}
          
           
            <div class="row">
                   <div class="col-sm-6"><strong>#</strong></div>
                        <td>{{ $work->id }}</td><br>
                    <div class="col-sm-6"><strong>Title</strong></div>
                        <td>{{ $work->title }}</td><br>
                   <div class="col-sm-6"><strong>Description</strong></div>
                        <td>{{ $work->description }}</td>
                    <div class="col-sm-6"><strong>Date</strong></div><br>
                        <td>{{ $work->created_at }}</td>
                  
                    
            </div>
        </thead>
        
        <tbody>                                                                                                                         
          
    </table>
</div>
@endsection




