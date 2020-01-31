@extends('layouts.app')

@section('content')

<div class="content-wrapper-community-index">
    <h3 class="text-center mt-3 mb-3">登録コミュニティ一覧</h3>
    
    @foreach($register_communities as $register_community)
        <div class="community-wrapper1">
            <p class="text-center">コミュニティ名: <a href="{{ route('communities.show', ['id' => $register_community->id])}}">{{$register_community->name}}</a></p>
            <p class="text-center">コミュニティ概要: {{$register_community->description}}</p>
        </div>
    @endforeach
</div>

@endsection