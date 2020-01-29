@extends('layouts.app')

@section('content')

<h2 class="text-center mt-3 pt-2 mb-3 pb-2"><img src="{{ secure_asset('images/') }}" id="communities-create-logo">コミュニティ一覧</h2>

<div class="container">
    
    @foreach ($communities as $community)
        <h3 class="text-center"><a href="{{ route('communities.show', ['id' => $community->id]) }}">{{ $community->name }}</a></h3>
        <p class="text-center">{{ $community->description }}</p>
    @endforeach

</div>
@endsection