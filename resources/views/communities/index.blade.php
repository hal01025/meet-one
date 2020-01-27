@extends('layouts.app')

@section('content')

<h2 class="text-center mt-3 pt-2">コミュニティ一覧</h2>

@foreach ($communities as $community)
    <p>{{ $community->name }}</p>
    <p>{{ $community->description }}</p>
@endforeach

@endsection