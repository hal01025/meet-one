@extends('layouts.app')

@section('content')

<h4 class="text-center">フォロー一覧ページ</h4>

    @foreach ($followings as $following)
        <p class="text-center">ユーザー名: <a href="{{ route('followinglists.show', ['id' => $following->id ])}}">{{ $following->name }}</a></p>
        
    @endforeach

@endsection