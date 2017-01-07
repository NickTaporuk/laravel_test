@extends('layout')


@section('content')
        @unless(empty($people))
            There are no people
        @else
            Something else here
        @endunless

    @foreach ($people as $person)
        <li>{{ $person  }}</li>
    @endforeach
@stop

@section('header')

@stop

