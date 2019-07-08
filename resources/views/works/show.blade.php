<?php
// echo "<pre>";
//     print_r($works->toArray());
//     die('ok');
?>

@extends('layouts.app')
@section('content')
<div class="col-md-12">
    
    {{-- <h2>Home Work List</h2> --}}
    
     {{-- @php
        $_GET['student_class_id'] = ''; 
    @endphp --}}
    
    {{-- <a href="{{ route('works.create', ['student_class_id' => $_GET['student_class_id']])}}" class="btn btn-success" role="button">Home Work</a> --}}
     
    {{-- <table class="table table-striped"> --}}
        <thead>
            {{-- <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                         
            </tr> --}}
            {{-- <th>
                <tr>#&emsp;&emsp;&emsp;<td>{{ $work->id }}</td></tr><br>
                <tr>Title&emsp;&emsp;&emsp;<td>{{ $work->title}}</td><br>
                <tr>Description&emsp;&emsp;&emsp;<td>{{ $work->description}}</td><br>
                <tr>Date&emsp;&emsp;&emsp;<td>{{ $work->created_at}}</td><br>
                         
            </th> --}}
            {{-- <div class="container-fluid"> --}}
                    
                    {{-- <div class="row">
                      <div class="col-sm-6">#</div>
                      <div class="col-sm-6"><td>{{ $work->id }}</td></div>
                      <div class="col-sm-6">Title</div>
                      <div class="col-sm-6"><td>{{ $work->title }}</td></div>
                      <div class="col-sm-6">Description</div>
                      <div class="col-sm-6"><td>{{ $work->description }}</td></div>
                      <div class="col-sm-6">Date</div>
                      <div class="col-sm-6"><td>{{ $work->created_at }}</td></div>
                    
                      
                    </div> --}}
            {{-- </div> --}}
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
             {{-- {{dd($works)}} --}}
            {{-- @foreach ($work  as $value) --}}

           
                {{-- <tr>
                    <td>{{ $work->id }}</td>
                    <td>{{ $work->title}}</td>
                    <td>{{ $work->description}}</td>
                    <td>{{ $work->created_at}}</td>
                    
                    
            
                </tr> --}}
            {{-- @endforeach --}}
           
        {{-- </tbody> --}}
    </table>
</div>
@endsection




