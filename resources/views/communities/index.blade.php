@extends('layouts.app')

@section('content')

<h2 class="text-center mt-3 pt-2 mb-3 pb-2"><img src="{{ secure_asset('images/') }}" id="communities-create-logo">コミュニティ一覧</h2>

<div class="container">
    
    @foreach ($communities as $community)
        <p class="text-center">コミュニティ名: <a href="{{ route('communities.show', ['id' => $community->id]) }}">{{ $community->name }}</a></p>
        <p class="text-center">コミュニティ概要: {{ $community->description }}</p>
    @endforeach

</div>
<div class="container text-center">
    {{ $communities->links('pagination::bootstrap-4') }}
</div>

@endsection