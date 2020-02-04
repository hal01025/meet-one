@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/followers/index.css') }}">
</head>

@section('content')
    <h4 class="text-center pb-5 mb-3 follower-list">フォロワーリスト</h4>
    
@foreach ($followers as $follower)
    <div class="follower-container pb-3 mb-3">
        <div class="follower-image-wrapper">
            @if (Storage::disk('local')->exists('public/profile_images/'.$follower->id.'.jpg'))
            <img src="/storage/profile_images/{{ $follower->id }}.jpg" class="follower-images">
            @else
            <img src="{{ secure_asset('images/comic-2026751_1280.png') }}" class="follower-images text-center">
            @endif
        </div>
        
        <div class="follower-info-container">
            <p class="text-center mb-3">ユーザー名: <a href="{{ route('followerlists.show', ['id' => $follower->id ]) }}">{{ $follower->name }}</a></p>
            <p class="text-center mb-3">趣味: {{ $follower->hobby }}</p>
            <p class="text-center mb-3">自己紹介: {{ $follower->intro }}</p>
        </div>
    </div>

@endforeach
    
@endsection