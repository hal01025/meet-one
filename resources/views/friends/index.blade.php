@extends('layouts.app')

@section('content')

<h2 class="text-center mt-3 pt-2">フレンド一覧</h2>

@foreach ($frineds as $friend)
    <p>{{ $friend->name }}</p>
    <p>{{ $friend->age }}</p>
    <p>{{ $friend->gender }}</p>
    <p>{{ $friend->hobby }}</p>
    <p>{{ $friend->introduction }}</p>
@endforeach

@endsection