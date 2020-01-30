@extends('layouts.app')

@section('content')

<p class="text-center">this is followerlists.index</p>

    @foreach ($followers as $follower)
        <p class="text-center">ユーザー名: <a href="{{ route('followerlists.show', ['id' => $follower->id ])}}">{{ $follower->name }}</p>
        
        
    @endforeach

@endsection