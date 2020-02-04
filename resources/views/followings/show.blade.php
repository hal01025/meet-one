@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/followings/show.css') }}">
</head>

@section('content')

<h4 class="text-center mt-2 mb-3 follow">フォロー詳細ページ</h4>

<div class="profile-container">

            <div class="image-container">
              @if (Storage::disk('local')->exists('public/profile_images/'.$following->id.'.jpg'))
              <img src="/storage/profile_images/{{ $following->id }}.jpg" class="profile-image">
              @else
              <img src="{{ secure_asset('images/comic-2026751_1280.png') }}" class="profile-image">
              @endif
            </div>
            <div class="self-introduction text-center">
              <p class="mb-3">ユーザー名: {{ $following->name }}<span>さん</span></p>
              <p class="mb-3">年齢: {{ $following->age }} 歳</p>
              <p class="mb-3">性別: {{ $following->gender }}</p>
              <p class="mb-3">趣味: {{ $following->hobby }}</p>
              <p class="mb-3">自己紹介: {{ $following->intro }}</p>
              
            </div>
          </div> 


<h5 class="text-center mt-5 mb-2">フォロワーのコメント</h5>

<table class="table table-striped">
    <tr>
        <th class="text-center">コメント日時</th>
        <th class="text-center">コメント内容</th>
    </tr>
    @if (count($comments) != 0)
        @foreach ($comments as $comment)
            <tr>
                <td class="text-center">{{ $comment->created_at }}</td>
                <td class="text-center">{{ $comment->comment }}</td>
            </tr>
        @endforeach
    @else
            <tr>
                <td class="text-center">未投稿</td>
                <td class="text-center">コメントなし</td>
            </tr>
    @endif
</table>
@endsection