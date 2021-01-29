@extends('layouts.main-layout')

@section('content')

    <h1>Office:</h1>

    <h1>ID: {{$office -> id}}</h1>

    <h2>
        {{$office -> name}}<br>
        {{$office -> address}}
    </h2>
    
@endsection