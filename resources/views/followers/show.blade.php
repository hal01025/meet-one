@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="text-center">フォロワー詳細ページ</h4>
        <p class="text-center">フォロワー情報</p>
        <p class="text-center">ユーザー名: {{ $follower->name }}</p>
    </div>
@endsection