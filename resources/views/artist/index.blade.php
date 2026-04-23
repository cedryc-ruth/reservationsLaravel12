@extends('layouts.main')

@section('title', $title)

@section('content')

@foreach($artists as $artist)
    <p><a href="{{ route('artist.show', $artist->id) }}">{{ $artist->firstname }} {{ $artist->lastname }}</a></p>
@endforeach

@endsection