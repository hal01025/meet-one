@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/communities/show.css') }}">
</head>

@section('content')
<div class="container">
    <div class="community-container">    
        <h4 class="text-center mt-3 mb-3 community-name">コミュニティ詳細ページ</h3>
        <p class="text-center">コミュニティID: {!! $community->id !!}</p>
        <h5 class="text-center community-name">コミュニティ名: {!! $community->name !!}</h5>
        <p class="text-center mt-2 mb-3">コミュニティ概要: {!! $community->description !!}</p>
        <p class="text-center mb-2">※フォローしていないユーザーの情報は閲覧できません</p>
        
        <div class="community-edit mb-3">
            <li class="edit-button">
                    <button class="btn edit-button mb-3 mt-2"><a href="{{ route('communities.edit', ['id' => $community->id]) }}" class="btn btn-primary">コミュニティ編集</a></button>
                    {!! Form::model($community, ['route' => ['communities.destroy', $community->id], 'method' => 'delete']) !!}
                    {!! Form::submit('コミュニティ削除', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
            </li>
        </div>
        
        <p class="text-center pt-2 mb-2 users-list">参加者一覧</p>
        
        <table class="table table-striped">
            <tr>
                <th class="text-center">ユーザー名</th>
                <th class="text-center">フォロー/解除</th>
            </tr>
        @foreach ($users as $user)
                @if (Auth::user()->is_following($user->id))
                <tr>    
                    <td class="text-center"><a href="{{ route('followinglists.show', ['id' => $user->id])}}" class="users-name">{{$user->name}}</a></td>
                    @if (Auth::user()->id != $user->id)
                    <td>
                    <ul>
                    <li class="unfollow-button">    
                        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('フォロー解除', ['class' => 'btn btn-secondary'])!!}
                        {!! Form::close() !!}
                    </li>
                    </ul>
                    </td>
                    @else
                    <td></td>
                    @endif
                </tr>
                @else
                <tr>    
                    <td class="text-center"><a href="{{ route('followinglists.show', ['id' => $user->id])}}">{{$user->name}}</a></td>
                    @if (Auth::user()->id != $user->id)
                    <td>
                    <ul>
                    <li class="follow-button">    
                        {!! Form::open(['route' => ['user.follow', $user->id]]) !!}
                        {!! Form::submit('フォロー', ['class' => 'btn btn-primary'])!!}
                        {!! Form::close() !!}
                    </li>
                    </ul>
                    </td>
                    @else
                    <td class="text-center"><p class="btn btn-success">あなた</p></td>
                    @endif
                </tr>
                @endif
            </tr>
        @endforeach
        </table>
        
    </div>
</div>
@endsection