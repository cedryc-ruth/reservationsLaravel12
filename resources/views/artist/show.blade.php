@extends('layouts.main')

@section('title', $title)

@section('content')
<p>{{ $artist->firstname }} {{ $artist->lastname }}</p>
@endsection