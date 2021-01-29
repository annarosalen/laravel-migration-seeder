@extends('layouts.main-layout')

@section('content')

    <h1>Brands:</h1>

    <ul>

        @foreach ($brands as $brand)

            <a href="{{route('brands-show', $brand -> id)}}">
            
                <li>
                    NAME: {{$brand -> name}} <br>
                    <img src="{{ $brand -> logo }}" alt="">
                    
                </li>

            </a>
            
            

        @endforeach

    </ul>
    
@endsection