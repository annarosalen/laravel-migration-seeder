@extends('layouts.main-layout')

@section('content')
    <h1>Employee:</h1>

    <h1>
        {{$employee -> name}}
        {{$employee -> lastname}}
    </h1>
    
@endsection