

@extends('layouts.app')
@section('content')
<div class="col-md-12">
    
    {{-- <h2>Home Work List</h2> --}}
    
        <a href="{{ url('student_fees/create/' . $student_fee->id)}}" class="btn btn-success" role="button">Student Fees Detail</a>
     
        <thead>
     
            <div class="row">
                   <div class="col-sm-6"><strong>#</strong></div>
                        <td>{{ $student_fee->id }}</td><br>
                    <div class="col-sm-6"><strong>Class Fee</strong></div>
                        <td>{{ $student_fee->class_fees	 }}</td><br>
                 
                 
            </div>
        </thead>
     
    </table>
</div>
@endsection








