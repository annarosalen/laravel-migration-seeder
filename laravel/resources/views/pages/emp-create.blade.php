@extends('layouts.main-layout')

@section('content')

    <h1>CREA NUOVO EMPLOYEE</h1>

    <form action="{{route('emp-store')}}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Name:</label>
        <input type="text" name="name" id="">

        <br>

        <label for="lastname">Lastname:</label>
        <input type="text" name="lastname">

        <br>

        <label for="hire_date">Hire Date:</label>
        <input type="text" name="hire_date">

        <br>

        <input type="submit" value="SALVA">


    </form>
    
@endsection