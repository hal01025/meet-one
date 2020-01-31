@extends('layouts.app')

@section('content')
<div class="container">    
    <h4 class="text-center mt-3 mb-3">コミュニティ詳細ページ</h3>
    <p class="text-center">コミュニティID: {!! $community->id !!}</p>
    <h5 class="text-center">コミュニティ名: {!! $community->name !!}</h5>
    <p class="text-center">コミュニティ概要: {!! $community->description !!}</p>
    <p class="text-center">参加者一覧</p>
    @foreach ($users as $user)
        @if (Auth::user()->id == $user->id)
        
        @elseif (!Auth::user()->is_following($user->id))
        <p class="text-center">ユーザー名: <a href="{{ route('followerlists.show', ['id' => $user->id])}}">{{$user->name}}</a></p>
        {!! Form::open(['route' => ['user.follow', $user->id], 'method' => 'post']) !!}
        {!! Form::submit('フォロー')!!}
        {!! Form::close() !!}
        
        @else
        <p class="text-center">ユーザー名: <a href="{{ route('user.follow', ['id' => $user->id])}}">{{$user->name}}</a></p>
        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
        {!! Form::submit('フォロー解除')!!}
        {!! Form::close() !!}
        @endif
    @endforeach
@if (\Auth::check())
    <button class="#"><a href="{{ route('communities.edit', ['id' => $community->id]) }}">コミュニティ編集</a></button>
@endif
</div>
@endsection