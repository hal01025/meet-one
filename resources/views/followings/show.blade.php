@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/followings/show.css') }}">
</head>

@section('content')

<h4 class="text-center mt-2 mb-3 follow">フォロー詳細ページ</h4>

<h4 class="text-center mt-2 follow">ユーザー名: {{ $following->name }}</h4>

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