@extends('layouts.main-layout')

@section('content')
    <h1>Employees:</h1>

    <a href="{{route('emp-create')}}">CREA NUOVO EMPLOYEE</a>

    <ul>
        @foreach ($employees as $employee)

        <li>
            <a href="{{ route('emps-show', $employee -> id) }}">{{ $employee -> name}} </a>
        
        
        </li>
            
        @endforeach
    </ul>
@endsection