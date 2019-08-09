

@extends('layouts.app')
@section('content')
<div class="col-md-12">
    
    <h2>Home Work List</h2>
    
        <a href="{{ url('students/studentDetail/' . $student->id)}}" class="btn btn-success" role="button">Student Detail</a>
     
        <thead>
     
            <div class="row">
                <div class="col-sm-6"><strong>#</strong></div>
                     <td>{{ $student->id }}</td><br>
                 <div class="col-sm-6"><strong>First Name</strong></div>
                     <td>{{ $student->first_name}}</td><br>
                <div class="col-sm-6"><strong>Last Name</strong></div>
                     <td>{{ $student->last_name }}</td>
                <div class="col-sm-6"><strong>Email</strong></div><br>
                     <td>{{ $student->email }}</td><br>
                <div class="col-sm-6"><strong>Father Name</strong></div>
                     <td>{{ $student->father_name}}</td><br>
                <div class="col-sm-6"><strong>Mother Name</strong></div>
                     <td>{{ $student->mother_name }}</td><br>
                 <div class="col-sm-6"><strong>Aadhar Id</strong></div>
                     <td>{{ $student->aadhar_id }}</td><br>
                 <div class="col-sm-6"><strong>DOB</strong></div>
                     <td>{{ $student->dob}}</td><br>
                <div class="col-sm-6"><strong>DOA</strong></div>
                     <td>{{ $student->doa }}</td>
                <div class="col-sm-6"><strong>	Photo</strong></div><br>
                     <td>{{ $student->photo }}</td><br>
                <div class="col-sm-6"><strong>Gender</strong></div>
                     <td>{{ $student->gender }}</td><br>
                <div class="col-sm-6"><strong>Address</strong></div>
                     <td>{{ $student->address}}</td><br>
                <div class="col-sm-6"><strong>Teacher Name</strong></div><br>
                     <td>{{ $student->teacher_name }}</td>
                <div class="col-sm-6"><strong>Student Class</strong></div><br>
                     <td>{{ $student->address }}</td>
                <div class="col-sm-6"><strong>City</strong></div>
                     <td>{{ $student->city}}</td><br>
                <div class="col-sm-6"><strong>State ID</strong></div>
                     <td>{{ $student->state_id }}</td>
                <div class="col-sm-6"><strong>Countary ID</strong></div><br>
                     <td>{{ $student->countary_id }}</td>
                 
         </div>
        </thead>
     
    </table>
</div>
@endsection








