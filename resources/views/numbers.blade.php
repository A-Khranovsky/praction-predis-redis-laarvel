@extends('layout')
@section('content')
    @if(isset($numbers))
        first: {{$numbers[0]}}<br/>
        second: {{$numbers[1]}}<br/>
        <form method="post" action="{{route('numbers.increment')}}">
            @csrf <input type="submit" value="Incr both with transaction">
        </form>
    @else
        @foreach($array as $item)
            key{{$item}} = {{$item}}<br />
        @endforeach
    @endif
@endsection
