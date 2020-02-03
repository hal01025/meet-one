@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/followers/show.css') }}">
</head>

@section('content')
<h4 class="text-center mt-2 mb-3 follow">フォロワー詳細ページ</h4>
          <div class="profile-container">

            <div class="image-container">
              @if (Storage::disk('local')->exists('public/profile_images/'.$follower->id.'.jpg'))
              <img src="/storage/profile_images/{{ $follower->id }}.jpg" class="profile-image">
              @else
              <img src="{{ secure_asset('images/comic-2026751_1280.png') }}" class="profile-image">
              @endif
              <p class="text-center">プロフィール画像</p>
            </div>
            <div class="self-introduction text-center">
              <p class="mb-2">ユーザー名: {{ $follower->name }}<span>さん</span></p>

              <p class="mb-2">年齢: {{ $follower->age }} 歳</p>
              <p class="mb-2">性別: {{ $follower->gender }}</p>
              <p class="mb-2">趣味: {{ $follower->hobby }}</p>
              <p class="mb-2">自己紹介: {{ $follower->intro }}</p>
              
            </div>
          </div> 

<h5 class="text-center mt-5 mb-2">フォローのコメント</h5>

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