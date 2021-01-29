@extends('layouts.main-layout')

@section('content')

    <h1>Brand:</h1>

    <h1>ID: {{$brand -> id}}</h1>

    <h2>{{$brand -> name}}</h2>

    <img src="{{$brand -> logo}}" alt="">
    
@endsection