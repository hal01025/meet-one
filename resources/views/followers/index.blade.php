@extends('layouts.app')

@section('content')

<h4 class="text-center">フォロワー一覧ページ</h4>

    @foreach ($followers as $follower)
        <p class="text-center">ユーザー名: <a href="{{ route('followerlists.show', ['id' => $follower->id ])}}">{{ $follower->name }}</a></p>
        
    @endforeach

@endsection