<?php
// echo "<pre>";
//     print_r($allData->toArray());
//     die;
?>
{{-- {{dd($allData)}}; --}}
{{-- @extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h2>Session List</h2>
    <a href="{{ route('works.create')}}" class="btn btn-success" role="button">Add Work</a> 
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">student Section</th>
                <th scope="col">Student Name</th>
                <th scope="col">Email</th>
                <th scope="col">DOB</th>
                
               
                   
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($allData)){
            ?>
                @foreach ($allData  as $value)
                    <tr>
                            <td>{{ $value->id }}</td>
                        <td>{{ $value['student_class']->section }}</td>
                    <td>{{ $value['student']->first_name }} {{$value['student']->last_name}}</td>
                        <td>{{ $value['student']->email }}</td>
                        <td>{{ $value['student']->dob }}</td>
                    
                      
                    </tr>
                @endforeach
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
@endsection

 --}}
