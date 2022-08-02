@extends('layout')
@section('content')
    <form method='post' action="{{route('name.set')}}">
        @csrf
        Enter your name: <br />
        <input type='text' name='name'/><br />
        <input type='submit' value='Send' />
    </form>
@endsection
