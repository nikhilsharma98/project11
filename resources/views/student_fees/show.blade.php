

@extends('layouts.app')
@section('content')
<div class="col-md-12">
    
    <h2>Home Work List</h2>
    
        {{-- @php
            $_GET['student_class_id'] = ''; 
        @endphp --}}
    
        <a href="{{ url('student_fees/create/' .$student_fee->id)}}" class="btn btn-success" role="button">Teacher Detail</a>
     {{-- {{dd($student_fee)}} --}}
    
        <thead>
            
          
           
            <div class="row">
                   <div class="col-sm-6"><strong>#</strong></div>
                        <td>{{ $student_fee->id }}</td><br>
                    <div class="col-sm-6"><strong>Class Fee</strong></div>
                        <td>{{ $student_fee->student_class	 }}</td><br>
                   
                  
                    
            </div>
        </thead>
        
        <tbody>                                                                                                                         
          
    </table>
</div>
@endsection



