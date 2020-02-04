@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/followings/index.css') }}">
</head>

@section('content')
    <h4 class="text-center pb-5 mb-3 following-list">フォローリスト</h4>
    
@foreach ($followings as $following)
    <div class="following-container pb-3 mb-3">
        <div class="following-image-wrapper">
            @if (Storage::disk('local')->exists('public/profile_images/'.$following->id.'.jpg'))
            <img src="/storage/profile_images/{{ $following->id }}.jpg" class="following-images">
            @else
            <img src="{{ secure_asset('images/comic-2026751_1280.png') }}" class="following-images text-center">
            @endif
        </div>
        
        <div class="following-info-container">
            <p class="text-center mb-3">ユーザー名: <a href="{{ route('followinglists.show', ['id' => $following->id ]) }}">{{ $following->name }}</a></p>
            <p class="text-center mb-3">趣味: {{ $following->hobby }}</p>
            <p class="text-center mb-3">自己紹介: {{ $following->intro }}</p>
        </div>
    </div>

@endforeach
    
@endsection