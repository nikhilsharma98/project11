

@extends('layouts.app')
@section('content')
<div class="col-md-12">
    
    {{-- <h2>Home Work List</h2> --}}
    
        {{-- @php
            $_GET['student_class_id'] = ''; 
        @endphp --}}
    
        <a href="{{ url('teachers/create/' . $teacher->id)}}" class="btn btn-success" role="button">Teacher Detail</a>
     
    
        <thead>
            
          
           
            <div class="row">
                   <div class="col-sm-6"><strong>#</strong></div>
                        <td>{{ $teacher->id }}</td><br>
                    <div class="col-sm-6"><strong>First Name</strong></div>
                        <td>{{ $teacher->first_name}}</td><br>
                   <div class="col-sm-6"><strong>Last Name</strong></div>
                        <td>{{ $teacher->last_name }}</td>
                    <div class="col-sm-6"><strong>Email</strong></div><br>
                        <td>{{ $teacher->email }}</td><br>
                    <div class="col-sm-6"><strong>Age</strong></div>
                        <td>{{ $teacher->age}}</td><br>
                   <div class="col-sm-6"><strong>Experience</strong></div>
                        <td>{{ $teacher->experience }}</td><br>
                    <div class="col-sm-6"><strong>Aadhar Id</strong></div>
                        <td>{{ $teacher->aadhar_id }}</td><br>
                    <div class="col-sm-6"><strong>DOB</strong></div>
                        <td>{{ $teacher->dob}}</td><br>
                   <div class="col-sm-6"><strong>Gender</strong></div>
                        <td>{{ $teacher->gender }}</td>
                    <div class="col-sm-6"><strong>Address</strong></div><br>
                        <td>{{ $teacher->address }}</td>
                  
                    
            </div>
        </thead>
        
                                                                                                                                 
          
    </table>
</div>
@endsection




