@extends('layout')
@section('content')
    <form method='post' action="{{route('name.set')}}">
        @csrf
        Enter your name: <br />
        <input type='text' name='name'/><br />
        <input type='submit' value='Send' />
    </form>
    <br />
    <form method='post' action="{{route('numbers.set')}}">
        @csrf
        Enter first number : <br />
        <input type='text' name='first_number'/><br />
        Enter second number : <br />
        <input type='text' name='second_number'/><br />
        <input type='submit' value='Send' />
    </form>
    <br />
    <form method="post" action="{{route('numbers.pipe')}}">
        Set 20 keys and values across from 0 with pipeline: <br />
        @csrf <input type="submit" value="Set">
    </form>
@endsection
