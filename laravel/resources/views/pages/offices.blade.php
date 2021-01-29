@extends('layouts.main-layout')

@section('content')

    <h1>Offices:</h1>

    <ul>

        @foreach ($offices as $office)

            <li>

                <a href="{{route('offices-show', $office -> id)}}">
                    
                    ID: {{$office -> id}}<br>
                    CITY: {{$office -> name}}<br>
                    ADDRESS: {{$office -> address}}
                
                </a>
                
            </li>
            
        @endforeach

    </ul>
    
@endsection