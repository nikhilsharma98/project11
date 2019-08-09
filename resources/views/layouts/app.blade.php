<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
    <div id="app">
            @include('include.navbar') 
        <div class="container">
                @include('include.messages')  
            <div class="main-table-cont">
                @yield('content')
            </div>
        </div>
    </div>
    <style>
            .main-table-cont{
                background-color: #fff;
                float: left;
                width: 100%;
            }
        </style>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="{{ asset('js/valid.js') }}"></script>
    <script src="{{ asset('js/feedbacks.js') }}"></script>
    <script src="{{ asset('js/guardians.js') }}"></script>
    <script src="{{ asset('js/school_session.js') }}"></script>
    <script src="{{ asset('js/school.js') }}"></script>
    <script src="{{ asset('js/student_class_students.js') }}"></script>
    <script src="{{ asset('js/students_classes.js') }}"></script>
    <script src="{{ asset('js/students.js') }}"></script>
    <script src="{{ asset('js/works.js') }}"></script>
    <script src="{{asset('js/teachers.js')}}"></script>
    <script src="{{asset('js/student_fees.js')}}"></script>
    <script src="{{asset('js/ajax.js')}}"></script>
    
    
    
</body>
</html>
